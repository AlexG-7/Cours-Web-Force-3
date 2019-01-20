import { Component, OnInit } from '@angular/core';
import { ContactsService } from '../services/contacts.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.css']
})
export class SidebarComponent implements OnInit {
  favs:Array<Object>;
  constructor(private contactService:ContactsService, private router: Router) { }

  ngOnInit() {
    this.contactService.favSubject.subscribe(
      data => this.favs = data
    );
  }

  showDetails($event, contact) {
    event.preventDefault();
    this.router.navigate(['/contact']);
    this.contactService.detailSubject.next(contact);
  }

}
