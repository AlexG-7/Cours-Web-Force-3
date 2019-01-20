## Enoncé

L'utilisateur saisit un montant HT et peut saisir s'il le souhaite une remise, le résultat TTC s'affiche en HTML.

## Remarques

* L'utilisateur doit pouvoir répondre oui ou yes à la demande de remise.

* La saisie de la remise se fait en pourcentage, et elle s'applique sur le montant HT autrement il y a fraude à la TVA ;-)

* Au moment de l'affichage on doit connaître le pourcentage de remise, s'il y en a eu une, ou bien savoir le fait qu'aucune remise n'a été appliquée.

* Quand votre code est fonctionnel, FACTORISEZ-LE :
Factoriser du code consiste à éviter de répéter les mêmes istructions. 
Ici, il ne faut pas répéter le calcul du montant TTC final.