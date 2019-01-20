import { Injectable } from '@angular/core';
import { HttpClient} from "@angular/common/http";
import { BehaviorSubject, Subject } from 'rxjs';
import { map } from 'rxjs/operators';

// import { Observable } from "rxjs/Observable";

@Injectable()


export class ContactsService {

/*
 * Pour communiquer entre 2 component, 
 * une des techniques existantes 
 * est d'utiliser le BehaviorSubject de RxJS
 * 
 * Le BehaviorSubject est capable de:
 * 1/ pusher une donnée depuis un component grâce à la méthode .next()
 * 2/ récupérer cette donnée depuis un autre component en s'abonnant à la méthode .subscribe()
*/
  // On créé donc un BehaviorSubject dans lequel on peut pousser une donnée depuis "contacts.component.ts"
  // On le récupèrera depuis un autre component en s'abonnant 
  contactsSubject = new BehaviorSubject([]);
  detailSubject = new BehaviorSubject({});
  favSubject = new BehaviorSubject([]);
/*
 * FIN DE LA TECHNIQUE POUR COMMUNIQUER ENTRE COMPONENT
*/

  constructor(private http:HttpClient) { }

  getContacts(number) {
    return this.http.get('https://randomuser.me/api/?results='+number+'&nat=fr&seed=d9a86e623119c8b7');
    //&seed=d9a86e623119c8b7
  } // Fin getContacts()


}
