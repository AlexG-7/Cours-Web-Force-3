import { Component, OnInit, Input } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { DomSanitizer } from '@angular/platform-browser';
import { YoutubeVideoPlayer } from '@ionic-native/youtube-video-player/ngx';

@Component({
  selector: 'app-trailer',
  templateUrl: './trailer.page.html',
  styleUrls: ['./trailer.page.scss'],
})
export class TrailerPage implements OnInit {

  constructor(
            private modalCtrl:ModalController,
            private sanitizer:DomSanitizer,
    ) { }
  video:string;
   

  ngOnInit() {
    console.log(this.video);
  }

  /*
    closeTrailer()
    Fermer le modal
    doc / https://beta.ionicframework.com/docs/api/modal-controller
  */
  closeTrailer() {
    this.modalCtrl.dismiss();
  }

  /*
    closeTrailer()
    Retourne une url safe pour afficher un iframe (sinon angular considère que ce n'est pas sécurisé)
  */
  getSafeUrl() {
    return this.sanitizer.bypassSecurityTrustResourceUrl( `${this.video}?modestbranding=1&autohide=1&showinfo=0&controls=0`);
  }

         






  

}
