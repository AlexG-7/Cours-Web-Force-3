import { Component, OnInit } from '@angular/core';
import {trigger, state, style, animate, transition } from '@angular/animations';
import { HttpClient } from "@angular/common/http";
import { ContactsService } from "../services/contacts.service";
import { Router } from '@angular/router';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styleUrls: ['./details.component.css'],
  
  animations: [
    // trigger('openClose', [
    //   // ...
    //   state('open', style({
    //     opacity: 1,
    //   })),
    //   state('closed', style({
    //     opacity: 0.5,
    //   })),
    //   transition('open => closed', [
    //     animate('1s')
    //   ]),
    //   transition('closed => open', [
    //     animate('0.5s')
    //   ]),
    // ]),
    
      trigger(
        'slideLeftAnimation', [
          transition(':enter', [
            style({transform: 'translateX(100%)', opacity: 0}),
            animate('200ms ease-out', style({transform: 'translateX(0)', opacity: 1}))
          ]),
          transition(':leave', [
            style({transform: 'translateX(0)', opacity: 1}),
            animate('200ms ease-out', style({transform: 'translateX(-100%)', opacity: 0}))
          ])
        ]
      )
  ],

})

export class DetailsComponent implements OnInit {
  details=null;
  isOpen = 'closed';
  constructor(private http:HttpClient, private contactService:ContactsService, private router:Router) { }

  ngOnInit() {

    console.log(this.contactService.detailSubject);
    
    this.contactService.detailSubject
    .subscribe(
      data => {
        console.log(data);
        console.log(Object.keys(data).length);
        if(Object.keys(data).length === 0){ 
          /* Si Les données sont vides alors on reroute sur la page qui liste les contacts*/
          /* PS : les routes sont enregistrées dans src/app/app.module.ts */
          this.router.navigate(['/']);
        }
        this.details=data;

      }
    );
  }


  sayHello(event) {
    event.preventDefault();
    alert('Coucou 😁')
  }

}
