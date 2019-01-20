import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { NgModule } from '@angular/core';
import { HttpClientModule} from '@angular/common/http';
import { ReactiveFormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { ContactsComponent } from './contacts/contacts.component';
import { DetailsComponent } from './details/details.component';

import { ContactsService } from './services/contacts.service';
import { FirstletterPipe } from './pipes/firstletter.pipe';
import { AboutComponent } from './about/about.component';
import { FilterContactsPipe } from './pipes/filter-contacts.pipe';
import { DocumentationLinksComponent } from './documentation-links/documentation-links.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { AddContactComponent } from './add-contact/add-contact.component';
import { OrderPipe } from './pipes/order.pipe';

 const routes: Routes  = [
   { path: '', component: ContactsComponent },
   { path: 'contact', component: DetailsComponent },
  //  { path: 'ajouter', component: AddContactComponent },
   { path: 'a-propos', component: AboutComponent },
   { path: 'liens-utiles', component: DocumentationLinksComponent }
 ];

@NgModule({
  declarations: [
    AppComponent,
    ContactsComponent,
    FirstletterPipe,
    DetailsComponent,
    AboutComponent,
    FilterContactsPipe,
    DocumentationLinksComponent,
    SidebarComponent,
    AddContactComponent,
    OrderPipe,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HttpClientModule,
    ReactiveFormsModule,
    RouterModule.forRoot(routes)
   // RouterModule.forChild(appRoutes),
   
  ],
  providers: [ContactsService],
  bootstrap: [AppComponent, SidebarComponent]
  // bootstrap: [AppComponent, ContactsComponent, DetailsComponent]
})
export class AppModule { }
