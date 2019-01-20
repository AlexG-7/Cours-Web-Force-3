import { Component, OnInit } from '@angular/core';
import { ModalController, ToastController } from '@ionic/angular';
import { FormGroup, FormBuilder, Validators, } from '@angular/forms';

@Component({
  selector: 'app-add-comment',
  templateUrl: './add-comment.page.html',
  styleUrls: ['./add-comment.page.scss'],
})
export class AddCommentPage implements OnInit {

  movie;
  commentForm: FormGroup;
  constructor(private modalCtrl:ModalController, private fb: FormBuilder, public toastController: ToastController) { }

  ngOnInit() {

    // Au chargement du component :
    // On récupère l'objet movie envoyé depuis : addComment() src/detail/detail.component.ts 
    console.log(this.movie); 
    
    /*
      Construction d'un objet formulaire (commentForm) ANGULAR de type "Reactive Form"
      https://alligator.io/angular/reactive-forms-introduction/
      Pour l'utliser :
      - il faut importer ReactiveFormModule dans src/app/app.module.ts (pour pouvoir l'utiliser dans TOUTE l'app)
      - il faut injecter FormBuilder dans la méthode constructor() du component où on veut utliser un reactiveForm
    */
    this.commentForm = this.fb.group({
        score: '',
        name:  ['', Validators.required],
        comment: ['', Validators.required],
        date: new Date().toJSON()
    })

  }

  /*
    onSubmit()
    param : form - le formulaire d'ajout d'avis
    rôle : ajouter un commentaire
  */
  onSubmit(form: FormGroup):void {
    console.log('Valid?', form.valid); // true or false
    console.log(form.value);
    // Ajouter le commentaire
    this.movie.comments = [form.value, ...this.movie.comments];
    // Fermer le modal
    this.modalCtrl.dismiss();
    this.presentToast();
  }

  /*
    ToastController permet de présenter des notifications
    doc / https://beta.ionicframework.com/docs/api/toast/
  */
  async presentToast() {
    const toast = await this.toastController.create({
      message: 'Avis ajouté',
      showCloseButton: true,
      position: 'bottom',
      color: 'tertiary',
      duration: 3500,
      closeButtonText: 'Fermer'
    });
    toast.present();
  }

  /*
    Fermer le modal
    doc / https://beta.ionicframework.com/docs/api/modal-controller
  */
  closeComment() {
    this.modalCtrl.dismiss();
  }

}
