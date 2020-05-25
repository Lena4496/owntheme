<?php
 //! Functions !//
// namespace App; // avoid conflict



function owntheme_supports (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}

// wp_register_Style function who permitted to register styles (firstparametter = handle = unique name/ 2param = source)

function owntheme_register_assets(){ 
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',[]);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], null, true);
    wp_deregister_script('jquery'); // dont register jquery anymore, for delete wp jquery and replace by our 
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');// add style in list
    wp_enqueue_script('bootstrap');
}



// function owntheme_title($title){
//     return 'ownthemetitle function' .$title;
// }


function owntheme_title_separator(){ // change the separator
    return '//';

};

// function owntheme_document_title_parts($title){
    // var_dump($title); die();
    // unset($title['tagline']); // remove tagline of title, and return title passed by filter created
    // $title[] = 'Ajout'; // after remove the default tagline, put what u want -
//     return $title;

// };


//! Actions - HOOKS !// //! Filters = like hook but need a value for altering - qd appliquer tout les filtres, recup val modif !//

add_action('after_setup_theme', 'owntheme_supports' ); //App\owntheme

// add_action('wp_head', function (){ // add somnething to do in head when called ; first tag + function called when use
//     die('Hola quétal?');
// }); // third parameter priority but not necessary
// add_action('wp_head', function (){ // add somnething to do in head when called ; first tag + function called when use
//     die('Ciao mi amigo');
// }, 5);
// add_theme_support('title-tag');
add_action('wp_enqueue_scripts', 'owntheme_register_assets'); // with wp register -> wp_enqueue = loaded when script and style are waiting
// add_filter('wp_title','owntheme_title');
add_filter('document_title_separator','owntheme_title_separator');
// add_filter('document_title_parts', 'owntheme_document_title_parts'); // register the hook (function owntheme) so add filter first param' is where u want to connect, second param' is the name of the function that u have created'