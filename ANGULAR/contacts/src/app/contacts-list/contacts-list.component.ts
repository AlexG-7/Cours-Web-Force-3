import { Component, OnInit } from "@angular/core";
import { ContactsService } from "../services/contacts.service";
import { Router } from "@angular/router";

@Component({
  selector: "app-contacts-list",
  templateUrl: "./contacts-list.component.html",
  styleUrls: ["./contacts-list.component.css"]
})
export class ContactsListComponent implements OnInit {
  // Declaration des variables
  contacts = [];
  loader;

  constructor(
    private contactService: ContactsService,
    private router: Router
  ) { }

  ngOnInit() {
    console.log(this);

    this.loader = true;

    this.contactService.contactsSubject.subscribe(data => {
      if (data.length != 0) {
        this.contacts = data;
        this.loader = false;
      } else {
        this.contactService.getContacts().subscribe(response => {
          this.loader = false;
          this.contacts = response["results"];
          this.contactService.contactsSubject.next(response["results"]);
        });
      }
    });

    // this.http
    //   .get("https://randomuser.me/api/?results=10&nat=fr&seed=b9ceff580fc9a81e")
    //   .subscribe(response => {
    //     console.log(response);
    //     this.contacts = response["results"];
    //     console.log(this.contacts);
    //   });
  }

  deleteContact(contact) {
    console.log(contact);
    //Récupérer l'index du contact à supprimer dans une variable
    let index = this.contacts.indexOf(contact);
    //Supprimer le contact du tableau this.contacts

    if (confirm("Voulez-vous vraiment supprimer ce contact ?")) {
      this.contacts.splice(index, 1);
    }
    console.log(this.contacts);
  }

  showContact(contact) {
    console.log(contact);
    this.router.navigate(["/contact"]);
    this.contactService.detailsSubject.next(contact);
  }
}
