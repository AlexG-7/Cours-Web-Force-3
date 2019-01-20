import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'order',
  pure:false
})
export class OrderPipe implements PipeTransform {

  transform(contacts: any, args?: any): any {
    //console.log(args)
    if(args == 'lastname') {
      return contacts.sort( (a, b) => (a.name.last > b.name.last) ? true : ((b.name.last > a.name.last) ? -1 : false) );
    }
    if(args == 'date') {
      return contacts.sort( (a, b) => (a.registered.date < b.registered.date) ? true : ((b.registered.date < a.registered.date) ? -1 : false) );
    }  
  }

}
