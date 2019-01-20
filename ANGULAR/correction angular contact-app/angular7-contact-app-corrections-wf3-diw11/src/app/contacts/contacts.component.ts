import { Component, OnInit} from '@angular/core';
import {trigger, state, style, animate, transition } from '@angular/animations';
import { HttpClient } from "@angular/common/http";
import { ContactsService } from "../services/contacts.service";
import { Router } from '@angular/router';


@Component({
  selector: 'app-contacts',
  templateUrl: './contacts.component.html',
  styleUrls: ['./contacts.component.css'],

  animations: [
    trigger(
      'slideAnimation', [
        transition(':enter', [
          style({transform: 'translateY(15px)', opacity: 0}),
          animate('350ms ease-out', style({transform: 'translateX(0)', opacity: 1}))
        ])
      ]
    )
  ],
})
export class ContactsComponent implements OnInit {
  /* 
  **  On déclare nos variables de component ici
  **  ELles sont accessibles dans la vue (le template html du component)
  */

  title = 'Application Contacts';
  contacts:Array<Object> = [];
  favs:any;
  loading:boolean;
  isOpen:boolean = false;
  isFormVisible:boolean = false;
  orderCriteria:string;
  selectedContact=false;
  selectedContactIndex=-1;
  constructor(private http:HttpClient, private contactService:ContactsService, private router:Router) { }

  
  ngOnInit() { 
    // On affiche le Loader (indicateur de chargement)
    this.loading=true
    this.orderCriteria='date'; // Utilisé côté vue avec le pipe ...| orderBy

    /* On récupère les données et on charge la variable this.contacts

    this.http.get('https://randomuser.me/api/?results=10&nat=fr')
              .subscribe(
                data => {console.log(data); this.contacts = data['results']}
              );
    */

    // On déporte la requête précédente dans un service (services/contacts.service.ts)
    // On sépare ainsi :
    //  -> la "logique" (ici dans le component) 
    //  -> de l'accès aux données (dans un service que l'on peut appeler de n'importe quel autre component)
    
    /* On charge le Array des favoris dans notre variable favs */
    this.contactService.favSubject.subscribe( data => this.favs = data);


    /* On charge Tous les contacts */
    console.log(this.contactService.contactsSubject);
    this.contactService.contactsSubject.subscribe( data => 
      {
        // SI il n'y a pas de contacts dans le contactsSubject on fait la requête HTTP
        if(data.length === 0) {
          this.contactService.getContacts(11).subscribe(
            data => {
                // console.log(data); 
                this.contacts = data['results']; 
                this.contactService.contactsSubject.next(this.contacts);
      
                this.loading=false;
                this.isOpen = !this.isOpen;
            }
          );

        }
        // SINON on récupère les contacts depuis le subject (pas besoin de faire la requête HTTP)
        else{
          this.contacts = data;
          this.loading=false;
          this.isOpen = !this.isOpen;
        }
      }) 


  } // FIN ngOnInit()


  /*
    Fonction: showDetails()
    Description: Permet d'affcihers les détail d'un contact
    @param: prend en paramètre l'objet contact
  */
  showDetails(event, contact) {
    event.preventDefault();
    this.router.navigate(['/contact']);
    this.contactService.detailSubject.next(contact);
    console.log( this.contactService.detailSubject);
  }
  
  /*
    Fonction: deleteContact()
    Description: Permet de supprimer un contact dans le tableau contacts
    @param: prend en paramètre l'objet contact
  */
  deleteContact(event,contact) {
    event.stopPropagation();
    if(confirm('Voulez-vous vraiment supprimer ' + contact.name.first + ' : index ' + this.contacts.indexOf(contact))) {
      let index = this.contacts.indexOf(contact);
      // indexOf renvoie l'index de l'entrée du tableau.
      // Si l'entrée n'existe pas indexOf renvoie -1
      if (index > -1) { 
        this.contacts.splice(index, 1);
      }

    }
  }

  /*
    Fonction: orderBy
    Description: modifie la valeur de this.orderCriteria  ('date' ou 'lastname' alternativement)
    Utilisé dans la vue HTML ligne 11 sur le bouton de tri par date ou nom
  */
  orderBy() {
    this.orderCriteria == 'date'? this.orderCriteria='lastname':this.orderCriteria='date';
  }

/*
  addOrRemoveToFav(event, contact) {
    event.stopPropagation();
    let indexOfContact = this.favs.indexOf(contact);
    // On ajoute le contact dans l'array this.favs SI il n'est pas déjà présent
    if( indexOfContact == -1) {
       // on modifie l'aspect de l'icone "Favori" - ajout de la class fas
       event.currentTarget.querySelector('i').classList.toggle('fas');
       this.favs=[contact, ...this.favs];
    }
    else {
      // on modifie l'aspect de l'icone "Favori" - retrait de la class fas
      event.currentTarget.querySelector('i').classList.toggle('fas');
      this.favs.splice(indexOfContact, 1);
    }
    
  }
*/

addOrRemoveToFav(event, contact) {
  event.stopPropagation();
  // Récupère l'objet contact de la liste "favs" / return null si il n'existe pas dans la liste "favs"
  let favContact= this.getContactByIdFromFavsArray(this.favs, contact.id.value);
  console.log(favContact);
  if (favContact) {
    // event.currentTarget.querySelector('i').classList.add('fas');
    let index = this.favs.indexOf(favContact);
    this.calculateClass(contact);
    this.favs.splice(index, 1);
    this.contactService.favSubject.next(this.favs);
  }
  else {
    // event.currentTarget.querySelector('i').classList.remove('fas');
    this.calculateClass(contact);
    this.contactService.favSubject.next([contact, ...this.favs]);
  }  
}


showContactForm(event,contact=false) {
  event.stopPropagation();
  
  if(contact) {
    this.selectedContact = contact;
    this.selectedContactIndex = this.contacts.indexOf(contact);
  }
  else {
    this.selectedContact = false;
    this.selectedContactIndex = -1;
  }
  this.isFormVisible==false ? this.isFormVisible=true : this.isFormVisible=false;
  console.log(this.selectedContactIndex);
}

storeContact(contact): void {
  console.log(contact);

  // CREATE
  // Si le contact n'existe pas dans le array contacts, on l'ajoute
  if(contact.index == -1) {
    let newcontact = {
      registered: {
        date:new Date().toJSON()
      },
      name: {
        first: contact.contact.first.toLowerCase(),
        last: contact.contact.last.toLowerCase()
      },
      email: contact.contact.email,
      cell: contact.contact.cell,
      location: {
        street: contact.contact.address.toLowerCase(),
        postcode: contact.contact.cp,
        city: contact.contact.city.toLowerCase()
      }, 
      picture: {
        thumbnail: "https://randomuser.me/api/portraits/lego/6.jpg", 
        large: "https://randomuser.me/api/portraits/lego/4.jpg"
      }, 
      id: {
        value: contact.contact.registered
      }
    }
    console.log(newcontact);
    this.contacts = [newcontact, ...this.contacts];
    this.contactService.contactsSubject.next(this.contacts);
  }

  // UPDATE
  // Sinon on le met à jour
  else {
    // On modifie  contact existant 
    let contactToUpdate:any = this.contacts[contact.index];
    contactToUpdate.name.first = contact.contact.first.toLowerCase();
    contactToUpdate.name.last = contact.contact.last.toLowerCase();
    contactToUpdate.email = contact.contact.email;
    contactToUpdate.cell = contact.contact.cell;
    contactToUpdate.location.street = contact.contact.address.toLowerCase();
    contactToUpdate.location.postcode = contact.contact.cp;
    contactToUpdate.location.city = contact.contact.city.toLowerCase();
    this.contactService.detailSubject.next(contact);

  }
  
  this.isFormVisible = false;
}


calculateClass(contact) {
  let contactId = contact.id.value;
  if (this.favs.filter(e => e.id.value === contactId).length > 0) {
    return true;
  }
  else {
    return false;
  }
}

/*
**  function getContactByIdFromFavsArray(arr, id)
**  Récupère l'objet contact de la liste "favs"
**  return null si il n'existe pas dans la liste "favs"
**  @param arr: le Array favs
**  @param id : l'id du contact recherché
**
**  @return l'objet contact trouvé, sinon null
*/
getContactByIdFromFavsArray(arr, id) {
  var result  = arr.filter( contact => contact.id.value == id );
  return result? result[0] : null; // or undefined
} 



}
// FIN CLASS
