<?php //Defining the menu structure
    $menu = [
        [
            'href' => BASE_URL.'index.php?E=recipes&M=search',
            'title' => 'Search',
        ],
        [
            'href' => '#',
            'title' => 'Recipes',
            'extra' => [],
            'childs' => [
              [
                 'href' => BASE_URL.'index.php?E=recipes&M=lista',
                 'title' => 'List recipes',
              ],
              [
                 'href' => BASE_URL.'index.php?E=recipes&M=add',
                 'title' => 'Submit recipe',
              ],
            ]
            ],
            [
                'href' => BASE_URL,
                'title' => 'Home Page',
            ]
    ];
    require_once CORE_DIR.'views.php';
    print_menu($menu);
?>
