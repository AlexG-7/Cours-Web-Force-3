import { Component, OnInit } from '@angular/core';
import { ModalController, NavController } from '@ionic/angular';
import { MovieService } from '../movie.service';
import { TrailerPage } from '../trailer/trailer.page';
import { AddCommentPage } from '../add-comment/add-comment.page';
@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage implements OnInit {
  movie;
  segmentName:string;
  avatars:Array<Object>;
  averageScore:number;

  constructor(
    private movieService:MovieService, 
    private modalCtrl:ModalController,
    private navCtrl:NavController
    ) { }

  ngOnInit() {
      
      console.log(this.movieService.getData());

      // SI on récupère un objet movie, 
      // ALORS on charge l'objet movie dans la variable de classe this.movie
      if(this.movieService.getData() != null) {
        this.movie = this.movieService.getData().movie;
      }
      // SINON on revient sur la liste des films
      else {
        this.navCtrl.navigateBack('/tabs');
      }

    
       // Afficher le segment "infos" au démarrage
       this.segmentName = "infos";

       // Générer un array d'images avatars dans this.avatars
       this.avatars = this.movieService.generateUsersAvatarArray();
      
  }

  /*
    segmentChanged()
    param : event - un event particulier quand le segment button est clické
    rôle: Changer de segment (tab "infos" ou "avis")
    utliser dans : detail.page.html

  */
  segmentChanged(event):void {
    console.log(event.detail.value);
    this.segmentName = event.detail.value;
  }

  /*
    printDuration()
    param : durée en minutes
    rôle: retourner une chaîne de caractère formatée comme suit : 2h09mn
    utilisée dans : detail.page.html
  */
  printDuration(dur:number) {
    return this.movieService.getHourMinutesFromDuration(dur);
  }

  /*
    changeSegmentName
    param : name (infos ou avis)
    rôle: changer this.segmentName
    utilisée dans : detail.page.html
  */
  changeSegmentName(name:string):void {
    this.segmentName = name;
  }

  /*
    printScore()
    param : durée en minutes
    rôle: Calculer et retourner le score moyen d'un film
    utilisée dans : detail.page.html
  */
  printScore(scoresFromComments:Array<Object>) {
    return this.movieService.getAverageScoreOfMovie(scoresFromComments)
  }

  /*
    seeTrailer()
    rôle: afficher la boite modal qui contient la page de la vidéo src/app/trailer
    utilisée dans : detail.page.html
    la class ModalController permet d'afficher et masquer une page dans une boîte Modal en lui envoyant des données
    (https://beta.ionicframework.com/docs/api/modal/)
  */
  async seeTrailer() {
    const modal = await this.modalCtrl.create({
      component: TrailerPage,
      componentProps: {video:this.movie.traileryt}
    });
    return await modal.present();
  }

  /*
    addComment()
    rôle: afficher la boite modal qui contient la page d'ajout d'avis src/app/add-comment
    utilisée dans : detail.page.html
    la class ModalController permet d'afficher et masquer une page dans une boîte Modal en lui envoyant des données
    (https://beta.ionicframework.com/docs/api/modal/)
  */
  async addComment() {
    const modal = await this.modalCtrl.create({
      component: AddCommentPage,
      componentProps: {movie:this.movie}
    });
    return await modal.present();
  }


}
