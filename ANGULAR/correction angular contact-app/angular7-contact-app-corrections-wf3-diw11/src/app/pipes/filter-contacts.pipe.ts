import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filterContacts',
  pure:false
  /*
  pipe pure ou impure - Par défaut un pipe Angular est "pure"

  -> Cela signifie que la détection de changement d'un pipe ne s'exécutera que si la valeur modifiée est une valeur primitive (string, number ou boolean)
  -> Cela signifie aussi que la détection de changement d'un pipe ne s'exécutera pas si la valeur modifiée est un array ou un object
     (pour des raisons de performance essentiellement).

  -> Donc si on veut détecter le changement dans un array ou un object, afin que le pipe s'éxecute à chaque ajout/suppression/modification :
     il faut déclarer le pipe comme impure avec "pure:false"
  */
})
export class FilterContactsPipe implements PipeTransform {

  // Un pipe {{.... | filterContacts:'string'}} côté HTML, exécutera la méthode transform ci-dessous
  // value est le tableau de contacts que l'on veut filtrer, args est la valeur string que l'utilisateur a saisi dans le champs de rechenche
  transform(value: any, args?: any): any {

    if(!value) return []; // Code défensif (si pas de valeur array, le pipe renvoie un array vide)

    return value.filter( item=> (item.name.first || item.name.last).toLowerCase().includes(args.toLowerCase()) );
  }

}
