import { Pipe, PipeTransform } from "@angular/core";

@Pipe({
  name: "filterList",
  pure: false
})
export class FilterListPipe implements PipeTransform {
  transform(contacts: any, args?: any): any {
    //On créé un array filtré par la saisie de l'utilisateur
    const result = contacts.filter(
      contact =>
        contact.name.first.toLowerCase().includes(args.toLowerCase()) ||
        contact.name.last.toLowerCase().includes(args.toLowerCase())
    );
    return result;
  }
}
