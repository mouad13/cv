<?php
/*
Plugin Name: proverbe
Plugin URI: http://zero-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Midnight Falcon
Author URI: http://votre-site.com
License: GPL2
*/

// function koko(){
// 	include 'exo.php';
// }

// add_shortcode('proverbe',koko);



function proverbe(){
        $proverbe=[
        "Quand on parle du loup, on en voit la queue.",
        "Chien qui aboie ne mord pas.",
         "Petit à petit, l'oiseau fait son nid.",
         "Mieux vaut vivre un jour comme un lion que cent ans comme un mouton.",
         "On apprend peu par la victoire, mais beaucoup par la défaite.",
         "On commence à vieillir quand on finit d'apprendre.",
        ];
        return $proverbe[array_rand($proverbe)];

    }
    
    add_shortcode('bonjour', 'proverbe');