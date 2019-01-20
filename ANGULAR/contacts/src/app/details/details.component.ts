import { Component, OnInit } from "@angular/core";
import { ContactsService } from "../services/contacts.service";
import { Router } from '@angular/router';

@Component({
  selector: "app-details",
  templateUrl: "./details.component.html",
  styleUrls: ["./details.component.css"]
})
export class DetailsComponent implements OnInit {
  contact;

  constructor(private contactService: ContactsService, private router: Router) { }

  ngOnInit() {
    /*
    this.contactsService.detailsSubject.subscribe(
      function(contactObject) { this.contact = contactObject }
    );
    */

    this.contactService.detailsSubject.subscribe(contactObject => {
      if (Object.keys(contactObject).length == 0) {
        this.router.navigate(["/"]);
      }
      this.contact = contactObject;
    });
  }
}
