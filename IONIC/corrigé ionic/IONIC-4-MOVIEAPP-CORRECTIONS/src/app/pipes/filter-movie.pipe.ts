import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'filtermovie'
})
export class FilterMoviePipe implements PipeTransform {

  transform(value: any, word?: any): any {

    if(word == undefined) {
      return value;
    }
    else {

      return value.filter(item => 
        // filtre par nom de film
        item.title.toLowerCase().includes(word.toLowerCase()) ||
        // filtrer par réalisateur
        item.director.toLowerCase().includes(word.toLowerCase()) ||
        // filter par nom d'acteur
        item.actors.filter( actor => actor.toLowerCase().includes(word.toLowerCase())).length > 0 ||
        // filtre par genre
        item.genre.filter( genre => genre.toLowerCase().includes(word.toLowerCase())).length > 0
        );
    }

  } // Fin methode transform




}
