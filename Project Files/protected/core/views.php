<?php

function print_menu($menu, $return_html = FALSE){
    $menuString = '';
  
    $menuString .= '<ul id="menu">';
    foreach($menu as &$menuItem){
        $menuString = $menuString.'<li class="parent"><a href="'.$menuItem['href'].'" '. (array_key_exists('extra', $menuItem) ? generate_attributes($menuItem['extra']) : '').'>'.$menuItem['title'].'</a>';
        if(array_key_exists('childs', $menuItem) && !empty($menuItem['childs'])){
            print_submenu($menuItem['childs'], $menuString);
        }
        $menuString .= '</li>';
    }
    $menuString .= '</ul>';
    
    if ($return_html){
        return $menuString;
    }
    else{
    print $menuString;
    }
}

function print_submenu(&$menu, &$menuString){
    $menuString .= '<ul class="child">';
    $childExists = false;
    foreach($menu as &$menuItem){
        $childExists = false;
        if(array_key_exists('childs', $menuItem) && !empty($menuItem['childs'])){
            $childExists = true;
        }
        
        $menuString = $menuString.'<li '.($childExists?'class="parent"':'').'><a href="'.$menuItem['href'].'" '. (array_key_exists('extra', $menuItem) ? generate_attributes($menuItem['extra']) : '').'>'.$menuItem['title'].'</a>';
        
        if ($childExists){
            print_submenu($menuItem['childs'], $menuString);
        }
        
        $menuString .= '</li>';
    }
    $menuString .= '</ul>';
}

function generate_attributes($kulcs_ertek_par){
    $tagString = '';
    foreach($kulcs_ertek_par as $key => $value){
        $tagString .= $key.'="'.$value.'" ';
    }
    return $tagString;
}