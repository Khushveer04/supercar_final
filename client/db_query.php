<?php
include('db_connect.php');

//accueil

$accueil = mysqli_query($conn, "SELECT * FROM index_accueil");


function get_info_accueil($conn) {
		
	$accueil = mysqli_query($conn, "SELECT * FROM index_accueil");
	return $accueil;
							
}

if(isset($_GET['id'])) {

$id=$_GET['id'];

$infovehicule = mysqli_query($conn, "SELECT * FROM info WHERE id='$id'");

$infopicvehicle = mysqli_query($conn, "SELECT * FROM info WHERE id='$id'");

$infopicvehicle2 = mysqli_query($conn, "SELECT * FROM info WHERE id='$id'");

$infopicm = mysqli_query($conn, "SELECT * FROM info WHERE id='$id'");

}

$info = mysqli_query($conn, "SELECT * FROM admin_accueil");

$infopic = mysqli_query($conn, "SELECT * FROM admin_accueil");

$infopicbmw = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='bmw'");

$infopicmercedes = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='mercedes'");

$infopicporsche = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='porsche'");

$infopicferrari = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='ferrari'");

$infopicalpine = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='alpine'");

$infopicalpharomeo = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='alpharomeo'");

$infopicford = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='ford'");

$infopicrenault = mysqli_query($conn, "SELECT * FROM info WHERE Status='Active' AND make='renault'");

$infobmw = mysqli_query($conn, "SELECT * FROM info WHERE Status = 'Active' AND make='bmw'");

$info_services = mysqli_query($conn, "SELECT photo FROM services where id=1;");

							 
$infomercedes = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='mercedes'");

$infoporsche = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='porsche'");

$infoferrari = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='ferrari'");

$infoalpine = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='alpine'");

$infotoyota = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='toyota'");

$infoford = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='ford'");

$inforenault = mysqli_query($conn, "SELECT * FROM info
WHERE Status = 'Active' AND make='renault'");


//titre_intro
$titre_intro =  mysqli_query($conn,"SELECT titre_intro AS titre
                                    FROM admin_accueil");
$titre_intro = mysqli_fetch_assoc($titre_intro)['titre'];


//intro
$intro =  mysqli_query($conn,"SELECT intro AS intro
                                    FROM admin_accueil");
$intro = mysqli_fetch_assoc($intro)['intro'];


//descrip
$descrip_nouvelle =  mysqli_query($conn,"SELECT descrip_nouvelle AS descrip
                                    FROM admin_accueil");
$descrip_nouvelle = mysqli_fetch_assoc($descrip_nouvelle)['descrip'];

//link_twitter
$link_twitter =  mysqli_query($conn,"SELECT link_twitter AS twitter
                                    FROM admin_accueil");
$link_twitter = mysqli_fetch_assoc($link_twitter)['twitter'];

//link_instagram
$link_instagram =  mysqli_query($conn,"SELECT link_instagram AS instagram
                                    FROM admin_accueil");
$link_instagram = mysqli_fetch_assoc($link_instagram)['instagram'];

//link_facebook
$link_facebook =  mysqli_query($conn,"SELECT link_facebook AS facebook
                                    FROM admin_accueil");
$link_facebook = mysqli_fetch_assoc($link_facebook)['facebook'];

//link_pinterest
$link_pinterest =  mysqli_query($conn,"SELECT link_pinterest AS pinterest
                                    FROM admin_accueil");
$link_pinterest = mysqli_fetch_assoc($link_pinterest)['pinterest'];

//adresse
$adresse =  mysqli_query($conn,"SELECT adresse AS ad
                                    FROM admin_accueil");
$adresse = mysqli_fetch_assoc($adresse)['ad'];

//heures
$heures_ouverture =  mysqli_query($conn,"SELECT heures_ouverture AS heures
                                    FROM admin_accueil");
$heures_ouverture = mysqli_fetch_assoc($heures_ouverture)['heures'];

//telephone
$telephone =  mysqli_query($conn,"SELECT telephone AS tele
                                    FROM admin_accueil");
$telephone = mysqli_fetch_assoc($telephone)['tele'];

//email
$email =  mysqli_query($conn,"SELECT email AS mail
                                    FROM admin_accueil");
$email = mysqli_fetch_assoc($email)['mail'];

//link_map
$link_map =  mysqli_query($conn,"SELECT link_map AS map
                                    FROM admin_accueil");
$link_map = mysqli_fetch_assoc($link_map)['map'];

// VEHICULES

if(isset($_GET['id'])) {

$id=$_GET['id'];

//name
$name =  mysqli_query($conn,"SELECT name AS nom
                             FROM info 
                             WHERE id=$id");
$name = mysqli_fetch_assoc($name)['nom'];

//make
$make =  mysqli_query($conn,"SELECT make AS marque
                             FROM info 
                             WHERE id=$id");
$make = mysqli_fetch_assoc($make)['marque'];

//model
$model =  mysqli_query($conn,"SELECT model AS modele
                             FROM info 
                             WHERE id=$id");
$model = mysqli_fetch_assoc($model)['modele'];

//type
$type =  mysqli_query($conn,"SELECT type AS typee
                             FROM info 
                             WHERE id=$id");
$type = mysqli_fetch_assoc($type)['typee'];

//annee
$annee =  mysqli_query($conn,"SELECT annee AS years
                             FROM info 
                             WHERE id=$id");
$annee = mysqli_fetch_assoc($annee)['years'];

//couleur
$couleur =  mysqli_query($conn,"SELECT couleur AS color
                             FROM info 
                             WHERE id=$id");
$couleur = mysqli_fetch_assoc($couleur)['color'];

//moteur
$nom_moteur =  mysqli_query($conn,"SELECT nom_moteur AS enginename
                             FROM info 
                             WHERE id=$id");
$nom_moteur = mysqli_fetch_assoc($nom_moteur)['enginename'];

//transmission
$transmission =  mysqli_query($conn,"SELECT transmission AS boite
                             FROM info 
                             WHERE id=$id");
$transmission = mysqli_fetch_assoc($transmission)['boite'];

//cylindre
$cylindre =  mysqli_query($conn,"SELECT cylindre AS piston
                             FROM info 
                             WHERE id=$id");
$cylindre = mysqli_fetch_assoc($cylindre)['piston'];

//capacite
$capacite =  mysqli_query($conn,"SELECT capacite AS cc
                             FROM info 
                             WHERE id=$id");
$capacite = mysqli_fetch_assoc($capacite)['cc'];

//jante
$jante =  mysqli_query($conn,"SELECT jante AS wheels
                             FROM info 
                             WHERE id=$id");
$jante = mysqli_fetch_assoc($jante)['wheels'];

//interieur
$interieur_couleur =  mysqli_query($conn,"SELECT interieur_couleur AS inside
                             FROM info 
                             WHERE id=$id");
$interieur_couleur = mysqli_fetch_assoc($interieur_couleur)['inside'];

//kilometrage
$kilometrage =  mysqli_query($conn,"SELECT kilometrage AS km
                             FROM info 
                             WHERE id=$id");
$kilometrage = mysqli_fetch_assoc($kilometrage)['km'];

//exterieur
$exterieur =  mysqli_query($conn,"SELECT exterieur AS ex
                             FROM info 
                             WHERE id=$id");
$exterieur = mysqli_fetch_assoc($exterieur)['ex'];

//interieur
$interieur =  mysqli_query($conn,"SELECT interieur AS inter
                             FROM info 
                             WHERE id=$id");
$interieur = mysqli_fetch_assoc($interieur)['inter'];

//moteur

$moteur =  mysqli_query($conn,"SELECT moteur AS engine
                             FROM info 
                             WHERE id=$id");
$moteur = mysqli_fetch_assoc($moteur)['engine'];

}

//SERVICES

$para1 =  mysqli_query($conn,"SELECT para1 AS para
                             FROM services");
$para1 = mysqli_fetch_assoc($para1)['para'];

$para2 =  mysqli_query($conn,"SELECT para2 AS parag
                             FROM services");
$para2 = mysqli_fetch_assoc($para2)['parag'];

$para3 =  mysqli_query($conn,"SELECT para3 AS paragr
                             FROM services");
$para3 = mysqli_fetch_assoc($para3)['paragr'];


?>