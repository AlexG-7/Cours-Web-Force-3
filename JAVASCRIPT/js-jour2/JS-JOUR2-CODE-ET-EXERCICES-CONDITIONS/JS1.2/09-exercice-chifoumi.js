'use strict';   // Mode strict du JavaScript

// Déclaration de trois variables.
var computer;
var player;
var random;

// var choicesList = ['pierre', 'feuille', 'ciseau']

// Récupération du choix du joueur.
player = window.prompt('Que choisissez-vous : pierre, feuille ou ciseau ?');


// Récupération d'un nombre aléatoire entre 0 et 1 inclus.
random = Math.random();

if(random <= 0.33) // (1/choicesList.length);
{
    computer = 'pierre';
}
else if(random <= 0.66) // (1/choicesList.length)*2;
{
    computer = 'feuille';
}
else
{
    computer = 'ciseau';
}

document.write("<p>Choix de l'ordinateur : " + computer + '</p>');


if(computer == player)
{
    document.write('<p>Vous avez choisi la même chose : égalité !</p>');
}
else
{
    // Le joueur et l'ordinateur n'ont pas choisi la même chose, la bataille commence !

    switch(computer)
    {
        case 'ciseau':
        if(player == 'pierre')
        {
            document.write('<p>La pierre écrase le ciseau : vous gagnez !</p>');
            document.write('<img src="https://assets.pokemon.com/assets/cms2/img/watch-pokemon-tv/seasons/season06/season06_ep28_ss02.jpg">');
        }
        else // player == 'feuille'
        {
            document.write('<p>La feuille est découpée par le ciseau : vous perdez !</p>');
            document.write('<img src="https://i.pinimg.com/736x/a0/6d/9d/a06d9d7b57be0c21a13bc515fc92dfea--pokemon-go-pikachu.jpg"');
        }
        break;

        case 'feuille':
        if(player == 'pierre')
        {
            document.write('<p>La pierre est enveloppée par la feuille : vous perdez !</p>');
            document.write('<img src="https://i.pinimg.com/736x/a0/6d/9d/a06d9d7b57be0c21a13bc515fc92dfea--pokemon-go-pikachu.jpg"');
        }
        else // player == 'ciseau'
        {
            document.write('<p>Le ciseau découpe la feuille : vous gagnez !</p>');
            document.write('<img src="https://assets.pokemon.com/assets/cms2/img/watch-pokemon-tv/seasons/season06/season06_ep28_ss02.jpg">');
        }
        break;

        case 'pierre':
        if(player == 'feuille')
        {
            document.write('<p>La feuille enveloppe la pierre : vous gagnez !</p>');
            document.write('<img src="https://assets.pokemon.com/assets/cms2/img/watch-pokemon-tv/seasons/season06/season06_ep28_ss02.jpg">');
        }
        else // player == 'ciseau'
        {
            document.write('<p>Le ciseau est écrasé par la pierre : vous perdez !</p>');
            document.write('<img src="https://i.pinimg.com/736x/a0/6d/9d/a06d9d7b57be0c21a13bc515fc92dfea--pokemon-go-pikachu.jpg"');
        }
        break;
    }
}