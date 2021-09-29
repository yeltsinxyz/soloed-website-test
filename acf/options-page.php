<?php

if( function_exists('acf_add_options_page') ):

    acf_add_options_page(array(
        'page_title' => 'Opções do Tema',
        'menu_slug' => 'opcoes',
        'menu_title' => 'Opções do Tema',
        'capability' => 'edit_posts',
        'position' => '',
        'parent_slug' => '',
        'icon_url' => 'dashicons-art',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button' => 'Atualizar',
        'updated_message' => 'Opções Atualizadas',
    ));
    
endif;