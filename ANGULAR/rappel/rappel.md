RAPPELS

Angular est fait pour construire des applications web mobiles, desktop

LE MODULE
confirguration de l'app
src/app/app.module.ts
-> components
-> pipes
-> services
-> modules

LES COMPONENTS
Un component est un morceau de l'application (généralement un morceau de la page)

Un component encapsule :

-> Un template (html et css)
-> la logique (Javascript .ts)


LES PIPES
Les pipes modifient l'apparence le l'affichage
-> Les pipes natifs
-> les custom pipes


LES SERVICES
-> Gérer l'accès aux données externes
-> Maintenir un point centralisé des données

Le HttpClient
Une class de Angular qui permet de faire de requêtes:
-> get()
-> post()
-> put()
-> delete()


-> dans details.component.html
<div class="container">

    <div class="row">
  
      <div class="col-md-9 offset-md-3">
        <h2><span> <i class="fas fa-arrow-left mr-5"></i> </span>{{contact.name.first}} {{contact.name.last}}</h2>
      
        <div class="jumbotron">
          <!-- LES INFOS DU CONTACT-->
          <img [src]="contact.picture?.large" >
          <p>{{contact.location.street}} {{contact.location.postcode}} {{contact.location?.city}}</p>
          <ul>
            <li>Email: {{contact.email}}</li>
              <li>Mobile: {{contact.cell}}</li>
          </ul>
        </div>
        
      </div>
  
    </div>
  
  
  </div>




METTRE EN PLACE LE ROUTING
-> dans app.module.ts
1 Charger le RouterModule et la classe Routes

import { RouterModule, Routes } from '@angular/router';















































