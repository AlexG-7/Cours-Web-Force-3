import { BrowserModule } from "@angular/platform-browser";
import { NgModule } from "@angular/core";
import { HttpClientModule } from "@angular/common/http";
import { RouterModule, Routes } from "@angular/router";

import { AppComponent } from "./app.component";
import { ContactsListComponent } from "./contacts-list/contacts-list.component";
import { FirstLetterCapPipe } from "./pipes/first-letter-cap.pipe";
import { FilterListPipe } from "./pipes/filter-list.pipe";
import { ContactsService } from "./services/contacts.service";
import { DetailsComponent } from "./details/details.component";

const routes: Routes = [
  { path: "", component: ContactsListComponent },
  { path: "contact", component: DetailsComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    ContactsListComponent,
    FirstLetterCapPipe,
    FilterListPipe,
    DetailsComponent
  ],
  imports: [BrowserModule, HttpClientModule, RouterModule.forRoot(routes)],
  providers: [ContactsService],
  bootstrap: [AppComponent]
})
export class AppModule { }
