<ul>
	<li><a href="?option=france"> France </a></li>
	<li><a href="?option=italie"> Italie </a></li>
	<li><a href="?option=espagne"> Espagne </a></li>
	<li><a href="?option=angleterre"> Angleterre </a></li>
</ul>
<hr />
<?php
	// --- recuperation des données	
if(isset($_GET['option']))
{
	switch($_GET['option'])
	{

		case 'france':	print '<p>Vous êtes Français ?</p>';	break;
		case 'italie':	print '<p>Vous êtes Italien ?</p>';		break;
		case 'espagne':	print '<p>Vous êtes Espagnol ?</p>';	break;
		case 'angleterre':	print '<p>Vous êtes Anglais ?</p>';	break;
	}
}
?>