import { Pipe, PipeTransform } from "@angular/core";

@Pipe({
  name: "firstLetterCap"
})
export class FirstLetterCapPipe implements PipeTransform {
  transform(value: string): any {
    //Récupérer la première lettre et la mettre en majuscule
    //Récupérer le reste de la chaine de caractère et la mettre en minuscule
    //Renvoyer tout la chaine de caractère
    return value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
  }
}
