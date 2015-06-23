<?php


require_once('presentation/JVAccueil.vue.php');
require_once('DAO/jeuxvideo.DAO.PHP');


 $user = "root";
 $password = "";

$data = array();

$data = JeuxVideoDAO::ListeCategorieJeux($user, $password);

AfficheEcranAccueil($data);
?>
