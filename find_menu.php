<?php

    $domain = "messages";
    bindtextdomain($domain, "Modules/find/locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    
    $menu_dropdown[] = array(
        'id'=>"find_menu_extras",
        'name'=>_("Find Local Devices"), 
        'path'=>"find" , 
        'session'=>"read", 
        'order' => 0,
        'icon'=>'icon-search'
    );
    
