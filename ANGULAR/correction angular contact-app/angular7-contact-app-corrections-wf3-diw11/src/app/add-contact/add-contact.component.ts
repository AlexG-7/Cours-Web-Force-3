import { Component, OnInit, Output,  Input, EventEmitter } from '@angular/core';
import { FormBuilder, FormGroup, Validators} from '@angular/forms';
import { ContactsService } from '../services/contacts.service'

@Component({
  selector: 'app-add-contact',
  templateUrl: './add-contact.component.html',
  styleUrls: ['./add-contact.component.css']
})
export class AddContactComponent implements OnInit {
  form: FormGroup;
  contacts;
  textAddOrUpdate;

  @Input() contact;
  @Input() contactIndex;
  /*
  @Output est le décorateur qui permet de transmettre de l'information à notre compoment parent

  */
  @Output() public addEvent: EventEmitter<Object> = new EventEmitter<Object>();

  constructor(private formBuilder:FormBuilder, private contactService:ContactsService) { }

  ngOnInit() {
    // Initialisation du formulaire et des règles de validation
    this.form = this.formBuilder.group({
      first:['', [Validators.required]],
      last:['', [Validators.required]],
      email:'',
      cell:'',
      address:'',
      cp:'', 
      city:'',
    });
    console.log(this.contactIndex);

    // Update d'un contact existant | On set les champs du formulaire
    if(this.contact) {
      this.form.controls['first'].setValue(this.contact.name.first);
      this.form.controls['last'].setValue(this.contact.name.last);
      this.form.controls['email'].setValue(this.contact.email);
      this.form.controls['cell'].setValue(this.contact.cell);

      this.form.controls['address'].setValue(this.contact.location.street);
      this.form.controls['cp'].setValue(this.contact.location.postcode);
      this.form.controls['city'].setValue(this.contact.location.city);

      this.textAddOrUpdate = "Mettre à jour"
    }
    // OU Create d'un nouveau contact
    else {

      this.textAddOrUpdate = "Ajouter"
    }
    
  }

  addContact(contact) {
    console.log(contact);
    let index = this.contactIndex;
    let addOrUpdate = this.textAddOrUpdate;
    this.form.reset();
    this.addEvent.emit({contact, index, addOrUpdate});
    // addEvent est l'event de type EventEmitter qui dispose de la méthode emit
    // contact est l'information qui sera transmise
    
  }

}
