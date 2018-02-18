<?php
/**
 * Created by PhpStorm.
 * User: asuri
 * Date: 18/02/2018
 * Time: 14:44
 */

include 'includes/configuration.php';
include 'includes/functions.php';
include 'connect.php';
include 'template.php';

set_include_path("./src");

require_once("src/Router.php");
require_once("src/model/ImageStorageStub.php");

/* Cette page est simplement le point d'arrivée de l'internaute
 * sur notre site. On se contente de lancer le main du routeur.
 *
 * Ici on utilise une instance de PoemStorageStub comme pseudo-BD, mais si on implémente
 * une autre classe (par exemple pour une BD MySQL), il suffira de changer
 * deux lignes et tout fonctionnera correctement. */
$router = new Router(new ImageStorageStub());
$router->main();

?>