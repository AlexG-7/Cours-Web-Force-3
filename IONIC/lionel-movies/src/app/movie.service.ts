import { Injectable } from "@angular/core";
import { NavController } from "@ionic/angular";

@Injectable({
  providedIn: "root"
})
export class MovieService {
  data;

  constructor(private navCtrl: NavController) {}

  //declaration
  push(url, dataObject) {
    this.data = dataObject;
    this.navCtrl.navigateForward(url);
  }

  getData() {
    return this.data;
  }
}
