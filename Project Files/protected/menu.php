<?php //Defining the menu structure
    $menu = [
        [
            'href' => '#',
            'title' => 'Search',
            'extra' => ['style' => 'color:red;', 'target' => '_blank'],
        ],
        [
            'href' => '#',
            'title' => 'Recipes',
            'extra' => [],
            'childs' => [
              [
                 'href' => BASE_URL.'index.php?E=recipes&M=lista',
                 'title' => 'List recipes',
                 'extra' => [ 'target' => '_blank'],
              ],
              [
                 'href' => BASE_URL.'index.php?E=recipes&M=add',
                 'title' => 'Submit recipe',
                 'extra' => [ 'target' => '_blank'],
              ],
            ]
        ]
    ];
    require_once CORE_DIR.'views.php';
    print_menu($menu);
?>
