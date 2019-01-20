import { Component } from "@angular/core";

@Component({
  selector: "messages",
  templateUrl: "./messages.component.html"
})
export class MessagesComponent {
  count = 0;

  title = "Messages";
  messages = ["Salut", "Hello", "Hola"];

  increment() {
    console.log(this);

    this.count++;
  }
  decrement() {
    this.count--;
  }
}
