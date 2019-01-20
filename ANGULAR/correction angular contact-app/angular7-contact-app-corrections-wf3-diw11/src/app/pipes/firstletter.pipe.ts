import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'firstletter'
})
export class FirstletterPipe implements PipeTransform {

  transform(word): any {
    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
  }

}
