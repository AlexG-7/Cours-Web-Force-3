import { Component, OnInit } from '@angular/core';
import { MovieService } from '../movie.service';

@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage implements OnInit {
movie;
  constructor(private movieService:MovieService) { }

  ngOnInit() {

this.movie= this.movieService.getData();
  }

  
}
