<?php


/**
 * Controlleur des formations
 *
**/

include_once(ROOT.'php/model/MFormation.php');
include_once(ROOT.'php/model/MChapter.php');
include_once(ROOT.'php/model/MClass.php');
include_once(ROOT.'php/model/MComment.php');
include_once(ROOT.'php/model/MInscription.php');
include_once(ROOT.'php/model/MUser.php');

/**
 * Class du controlleur des formations 
 *
**/
Class Formation {

    var $layout;
    function index() {
        require('../view/item.php');
    }



}