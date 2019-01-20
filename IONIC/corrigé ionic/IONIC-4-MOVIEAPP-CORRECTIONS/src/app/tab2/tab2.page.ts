import { Component, ViewChild } from '@angular/core';
import { MovieService } from '../movie.service';
import { Searchbar } from '@ionic/angular';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  movies:Array<Object>; // movies est un array d'objets movie
  
  constructor(private movieService:MovieService) {}

  ngOnInit() {
    this.movies = this.movieService.getAllMovies();
  }

  showDetail(movie) {
    
    /*
      On utilise une méthode push que l'on s'est crée dans src/app/movie.service.ts

      Cette fonction permet :
      * de naviguer en avant
      * d'envoyer sur la page un objet de données (on envoie l'objet movie)
    */
    this.movieService.push('/detail', {movie:movie});
  }
}
