<?php //Defining the menu structure
    $menu = [
        [
            'href' => '#',
            'title' => 'Profile',
            'extra' => ['style' => 'color:red;', 'target' => '_blank'],
        ],
        [
            'href' => '#',
            'title' => 'Recipes',
            'extra' => [],
            'childs' => [
              [
                 'href' => '#',
                 'title' => 'List recipes',
                 'extra' => [ 'target' => '_blank'],
              ],
              [
                 'href' => '#',
                 'title' => 'Submit recipe',
                 'extra' => [ 'target' => '_blank'],
              ],
            ]
        ],
        [
            'href' => '#',
            'title' => 'FAQ',
            'extra' => ['style' => 'color:white;', 'target' => '_blank'],
        ]
    ];
    require_once CORE_DIR.'views.php';
    print_menu($menu);
?>
