import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { BehaviorSubject, Subject } from "rxjs";

@Injectable({
  providedIn: "root"
})
export class ContactsService {
  detailsSubject = new BehaviorSubject({});

  contactsSubject=new BehaviorSubject([]);

  constructor(private http: HttpClient) {}

  getContacts() {
    return this.http.get(
      "https://randomuser.me/api/?results=10&nat=fr&seed=b9ceff580fc9a81e"
    );
  }
}
