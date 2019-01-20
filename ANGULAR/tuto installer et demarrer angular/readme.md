HELLO les gens. Je vois qu'il y a des questions sur comment réouvrir l'APP Angular contactapp chez vous.

Voici la petite procédure à suivre :

*1 Vous assurez d'installer NodeJS et NPM une fois pour toute sur votre machine*
> Vous rendre sur https://www.nodejs.org et télécharger et installer nodeJS

*2 Installer le CLI d'Angular une fois pour toute sur votre machine*
> Ouvrez l'outil invite de commande (cmd) depuis votre PC/Mac et installer le CLI d'angular avec la commande NPM suivante
`npm install -g @angular/cli`

*3 Installer visual StudioCode sur votre machine*
>https://code.visualstudio.com/

---------------------------------

=======================================
Ok Vous êtes prêts à ouvrir votre projet Angular :visage_légèrement_souriant:
=======================================

*4 ouvrez votre projet dans visual studio code*
> Glisser/déposer votre dossier contactapp (le projet angular) dans la fenêtre de l'éditeur visualStudioCode

*5 Ouvrez l'outil terminal et vérifier que vous êtes bien dans le dossier racine de votre app (.../contactapp/)*
> (Raccourci Ctrl+ù dans VS) pour ouvrir l'outil terminal
> Tapez la commande suivante pour réinstaller toutes les dépendances d'Angular (le dossier node_modules va se recréer tout seul)
    `npm install`

*6 TOUT EST OK :visage_légèrement_souriant: vous n'avez plus qu'à lancer l'app avec la commande :envoie_un_bisou:
>`ng serve`
> Ouvrir l'application dans le navigateur sur l'url : http://localhost:4200

Et puis si vous avez envie de créer une app Angular à partir de maintenant, puisque tout est installé sur votre machine, il vous suffit d'une seule ligne de commande dans le dossier que vous voulez :
`ng new nom-de-mon-app`

> Pour créer un component
`ng g c nom-du-component`

> Pour créer un pipe
`ng g p nom-du-pipe`

------------------------------------------------------------------------

Si besoin :
> La documentation officielle : https://angular.io