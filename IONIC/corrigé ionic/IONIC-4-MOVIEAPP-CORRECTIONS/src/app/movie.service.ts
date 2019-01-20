import { Injectable } from '@angular/core';
import { NavController } from '@ionic/angular';

@Injectable({
  providedIn: 'root'
})
export class MovieService {
  data = null;
  constructor(private navCtrl: NavController) { }

  /*
    function push()
    params : url (la component à charger), dataObject (l'objet du film)
    rôle : naviguer en avant et passer un objet de donnée au component
  */
  push(url, dataObject) {
    this.data = dataObject;
    this.navCtrl.navigateForward(url);
  }

  /*
    function getData()
    rôle : Récupérer la donnée envoyée avec push() (l'objet film)
  */
  getData() {
    return this.data;
  }

  /*
    function getAllMovies
    rôle : retourner un array de films
  */
  getAllMovies() {
    return [
      {
        title: 'Le labyrinthe',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/7h9LUexxkTSX9YWSQ88b6PE1JdL.jpg',
        resume: 'Thomas, 16 ans, se réveille dans un ascenseur. Il ne sait plus qui il est ni d\'où il vient, et ne semble se rappeler que de son prénom. Lorsque l\'ascenseur s\'ouvre, il est accueilli par d\'autres garçons de son âge dans la clairière, un monde mystérieux entouré par un labyrinthe impénétrable, et où personne ne sait pourquoi il est là.',
        duration: 116,
        traileryt: 'https://www.youtube.com/embed/5KInH8C5PyU',
        genre: ['Action', 'Science-fiction'],
        actors: ['Dylan O Brien', 'Kaya Scodelario', 'Ki Hong Lee', 'Aml Ameen', 'Blake Cooper'],
        director: 'Wes Ball',
        date: '2014-09-19',
        comments: [{ name: 'Fred', date: '2015-01-05', comment: 'Très bon scénario !', score: 5 }, { name: 'Djoe', date: '2014-10-11', comment: 'Film flippant à souhait, mais on a adoré', score: 4 }]
      },
      {
        title: 'Meet Me In St. Gallen',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/uGntNjUx6YAzbVy7RDgxWnWsdet.jpg',
        resume: 'Jesse et Celeste se rencontrent à un moment inattendu dans leur vie. Ils réalisent alors que leurs noms sont les mêmes que ceux des personnages de la comédie romantique «Celeste & Jesse Forever».',
        duration: 94,
        traileryt: 'https://www.youtube.com/embed/b_Rvg92Fh3U',
        genre: ['Romance', 'Drame'],
        actors: ['Bela Padilla', 'Carlo Aquino'],
        director: 'Irene Villamor',
        date: '2018-02-07',
        comments: [{ name: 'Bill', date: '2018-02-17', comment: 'Les acteurs sont excellents mais le scénario est parfois bancal ', score: 3 }]
      },
      {
        title: 'Coco',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/8AECsRLEDLoNvZ8JqrTFm0zBPqH.jpg',
        resume: 'Malgré la décevante absence totale de musique dans sa famille depuis des générations, Miguel rêve de devenir un grand musicien comme son idole Ernesto de la Cruz. Désespéré de pouvoir un jour montrer ses talents, il se retrouve à la suite d\'un mystérieux enchaînement d\'évènements dans l\'incroyavle et coloré Royaume des Morts. Sur sa route, il rencontre l\'escroc charmeur Hector et ensemble, ils partent pour un voyage extraordinaire pour découvrir la véritable histoire cachée de la famille de Miguel.',
        duration: 140,
        traileryt: 'https://www.youtube.com/embed/aTaW-HtvkQo',
        genre: ['Dessin animé', 'Comédie', 'Aventure'],
        actors: ['Anthony Gonzalez', 'Gael García Bernal', 'Benjamin Bratt', 'Alanna Ubach'],
        director: 'Jason Katz',
        date: '2017-11-22',
        comments: [{ name: 'Noah', date: '2017-12-15', comment: 'Tout simplement génial pour les enfants. Le thème de la mort dans ce dessin animé est parfaitement abordé. Des images à couper le souffle. Disney quoi', score: 5 }, { name: 'Delphine', date: '2017-12-27', comment: 'Très sympa :)', score: 4 }]
      },
      {
        title: 'La forme de l\'eau',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/c8lQpZWiRgv671BPu9bgzuFkveC.jpg',
        resume: 'Modeste employée d\'un laboratoire gouvernemental ultra-secret, Elisa mène une existence morne et solitaire, d\'autant plus isolée qu\'elle est muette. Sa vie bascule à jamais lorsqu\'elle et sa collègue Zelda découvrent une expérience encore plus secrète que les autres...',
        duration: 123,
        traileryt: 'https://www.youtube.com/embed/Yz9lXuqnxjI',
        genre: ['Drame', 'Fantastique', 'Romance'],
        actors: ['Sally Hawkins', 'Michael Shannon', 'Richard Jenkins', 'Octavia Spencer', 'Michael Stuhlbarg'],
        director: 'Guillermo del Toro',
        date: '2018-02-27',
        comments: [{ name: 'Natalya', date: '2018-03-07', comment: 'A voir. Très bon film', score: 5 }, { name: 'JC', date: '2018-03-11', comment: 'Film fantastique sympa mais qui ne restera pas dans l\'histoire', score: 3 }]
      },
      {
        title: 'Black Panther',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/g94IcdzPswTYl1ISdgn2EwvaZtt.jpg',
        resume: 'Black Panther suit T’Challa qui, après les événements de Captain America : Civil War, retourne chez lui, dans la nation africaine isolée et technologiquement avancée du Wakanda, pour prendre possession du trône. Cependant, quand un vieil ennemi réapparaît sur le radar, le courage de T’Challa en tant que roi et Black Panther est testé quand il est entraîné dans un conflit qui met le sort entier du Wakanda et du monde en danger.',
        duration: 134,
        traileryt: 'https://www.youtube.com/embed/7uO_NvoxMXU',
        genre: ['Action', 'Aventure', 'Science-fiction'],
        actors: ['Chadwick Boseman', 'Michael B. Jordan', 'Lupita Nyong o', 'Danai Gurira', 'Letitia Wright'],
        director: 'Ryan Coogler',
        date: '2018-02-16',
        comments: [{ name: 'Jennifer', date: '2018-02-21', comment: 'Un Marvel original et frais qui renouvelle le genre', score: 5 }, { name: 'Ludo', date: '2018-02-28', comment: 'Des scènes d\'action à couper le souffle, un monde fantastique loin de toute civilisation et une morale positive, un bon Marvel Americain quoi :)', score: 4 }, { name: 'Fred', date: '2018-03-01', comment: 'Juste génialissime !', score: 5 },]
      },

      {
        title: 'Ca',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/3SUz0F0I2Bodcj9Ev2pYSWnE9zp.jpg',
        resume: 'À Derry, dans le Maine, sept gamins ayant du mal à s\'intégrer se sont regroupés au sein du "Club des Ratés". Rejetés par leurs camarades, ils sont les cibles favorites…',
        duration: 135,
        traileryt: 'https://www.youtube.com/embed/Tw3yT-qAbvc',
        genre: ['Horreur', 'Drame'],
        actors: ['Jaeden Lieberher', 'Bill Skarsgård', 'Jeremy Ray Taylor', 'Sophia Lillis', 'Finn Wolfhard'],
        director: 'Andy Muschietti',
        date: '2017-09-05',
        comments: [{ name: 'Mike', date: '2017-10-15', comment: 'Excellent pour jouer à se faire peur, mais attention, n\'emmener surtout pas vos enfants au risque de les traumatiser à jamais des clowns :)', score: 3 }]
      },

      {
        title: 'Les nouveaux héros',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/7jAXeNgTPUY00txdsc5JloGCMBN.jpg',
        resume: 'Un génie de la robotique nommé Hiro Hamada, se retrouve embarqué dans un complot criminel qui menace de détruire la paisible ville high-tech de San Fransokyo. Avec l’aide d’un de ses plus proche compagnon – un robot nommé Baymax –, Hiro s’associe à une équipe de jeunes amateurs qui s’est donnée pour mission de sauver la population.',
        duration: 82,
        traileryt: 'https://www.youtube.com/embed/POxF0vTtbys',
        genre: ['Dessin animé', 'Comédie', 'Aventure'],
        actors: ['Scott Adsit-Baymax voice', 'Ryan Potter-Hiro voice', 'Daniel Henney-Tadashi voice'],
        director: 'Chris Williams',
        date: '2014-10-25',
        comments: []
      },

      {
        title: 'Paddington 2',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/qXFEXAJq1gnF9A7wFbTu1OlgSOn.jpg',
        resume: 'Installé dans sa nouvelle famille à Londres. Paddington est devenu un membre populaire de la communauté locale. A la recherche du cadeau parfait pour le 100e anniversaire de sa chère Tante Lucy, Paddington tombe sur un livre animé exceptionnel. Il se met à multiplier les petits boulots dans le but de pouvoir l’acheter. Mais quand le livre est soudain volé, Paddington et la famille Brown vont devoir se lancer à la recherche du voleur…',
        duration: 103,
        traileryt: 'https://www.youtube.com/embed/pqTZEkYshTg',
        genre: ['Dessin animé', 'Comédie'],
        actors: ['Ben Whishaw', 'Sally Hawkins', 'Hugh Bonneville', 'Samuel Joslin', 'Madeleine Harris'],
        director: 'Paul King',
        date: '2017-11-10',
        comments: []
      },
      {
        title: 'Daddy Cool',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/hrvJ9udxSMSy3GhJeDWuYTZB93x.jpg',
        resume: 'Adrien, 40 ans et totalement immature, se fait larguer par Maude, 35 ans, désireuse d’enfin fonder une famille. Pour tenter de reconquérir l’amour de sa vie, Adrien décide de monter dans le futur ex-appartement conjugal: une crèche à domicile… Le début, d\'une improbable expérience éducative...',
        duration: 97,
        traileryt: 'https://www.youtube.com/embed/w8m-7E1a2C0',
        genre: ['Comédie'],
        actors: ['Vincent Elbaz', 'Laurence Arné', 'Grégory Fitoussi', 'Jean-François Cayrey', 'Andy Raconte'],
        director: 'Maxime Govare',
        date: '2017-09-08',
        comments: []
      },
      {
        title: 'Blade Runner 2049',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/c0jCZGc0XMW1TpRP2nRCrwY3Tex.jpg',
        resume: 'En 2049, la société est fragilisée par les nombreuses tensions entre les humains et leurs esclaves créés par bioingénierie. L’officier K est un Blade Runner : il fait partie d’une force d’intervention d’élite chargée de trouver et d’éliminer ceux qui n’obéissent pas aux ordres des humains. Lorsqu’il découvre un secret enfoui depuis longtemps et capable de changer le monde, les plus hautes instances décident que c’est à son tour d’être traqué et éliminé. Son seul espoir est de retrouver Rick Deckard, un ancien Blade Runner qui a disparu depuis des décennies...',
        duration: 164,
        traileryt: 'https://www.youtube.com/embed/2XYOae4Wp44',
        genre: ['Science-fiction'],
        actors: ['Ryan Gosling', 'Harrisson Ford', 'Ana de Armas', 'Syvlia Hoeks', 'Robin Wright'],
        director: 'Denis Villeneuve',
        date: '2017-10-04',
        comments: []
      },
      {
        title: 'La Planète des Singes - Suprématie',
        image: 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/4Ar01t6sW1ZZBcbz2R1wqjzIBdr.jpg',
        resume: 'César et les Singes sont contraints de mener un combat dont ils ne veulent pas contre une armée d\'Humains dirigée par un Colonel impitoyable. Les Singes connaissent des pertes considérables et César, dans sa quête de vengeance, va devoir lutter contre ses instincts les plus noirs. Au terme d’un périple qui le conduira à un face à face avec le Colonel, les Singes et les Humains vont se livrer une guerre sans merci à l\’issue de laquelle une seule des deux espèces survivra - et dominera la planète.',
        duration: 142,
        traileryt: 'https://www.youtube.com/embed/vILRRtrFV68',
        genre: ['Science-fiction', 'Aventure'],
        actors: ['Andy Serkis', 'Woody Harrelson', 'Steve Zahn', 'Karin Konoval', 'Terry Notary'],
        director: 'Matt Reeves',
        date: '2017-07-11',
        comments: []
      }
    ];
  }


  /*
    function getHourMinutesFromDuration()
    params : duration en mn
    rôle : retourner une chaîne de caratère formatée en heures-minutes
  */
  getHourMinutesFromDuration(duration) {
    let hours = Math.ceil(duration / 60);
    let minutes = duration % 60;
    return `${hours}h${minutes}mn`
  }

  /*
   **  Fonction qui génère un tableau d'images pour les avatars user à afficher dans la liste des commentaires
   **  Utilisée dans le fichier movie-detail.ts
   */
  generateUsersAvatarArray() {
    let usersAvatarArray = [];
    for (var i = 4; i < 10; i++) {
      usersAvatarArray.push(`https://randomuser.me/api/portraits/lego/${i}.jpg`)
    }
    return usersAvatarArray;
  }

  /*
  **  Fonction qui calcule le score moyen d'un film d'apres les score laissés en commentaire
  **  @return : le score moyen
  */
  getAverageScoreOfMovie(comments) {
    console.log(comments);
    let score = 0;
    for (let i = 0; i < comments.length; i++) {
      score += parseInt(comments[i].score);
      console.log(score);
    }
    return (score / comments.length).toFixed(2);
  }


}
