<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('templates');
$twig   = new Environment($loader);

$page = !isset($_GET['page']) ? 'home' : $_GET['page'];
/* var_dump($_GET['title']); die; */
/* $page = 'video'; */

$selected_menu_index = isset($_GET['menu_index']) ? $_GET['menu_index'] : 0;

echo $twig->render('pages/' . $page . '.twig', [
    'title' => $_GET['title'],
    'selected_category' => isset($_GET['category']) ? $_GET['category'] : 'All',
    'categories' => [
        'All',
        'Putin Huilo',
        'Video',
        'Programming',
        'Video games',
        'Miss',
        'News',
        'Ukraine',
    ],

//Menu

'selected_menu_index' => isset($_GET['menu_index']) ? $_GET['menu_index'] : 0,
    'menu' => [
        [   
            'icon' => '<svg enable-background="new 0 0 24 24" height="5" viewBox="0 0 24 24" width="5" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="m12 4.44 7 6.09V20h-4v-6H9v6H5v-9.47l7-6.09m0-1.32-8 6.96V21h6v-6h4v6h6V10.08l-8-6.96z"></path></svg>',
            'title' => 'Главная',
            'link' => '/',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M10 14.65v-5.3L15 12l-5 2.65zm7.77-4.33-1.2-.5L18 9.06c1.84-.96 2.53-3.23 1.56-5.06s-3.24-2.53-5.07-1.56L6 6.94c-1.29.68-2.07 2.04-2 3.49.07 1.42.93 2.67 2.22 3.25.03.01 1.2.5 1.2.5L6 14.93c-1.83.97-2.53 3.24-1.56 5.07.97 1.83 3.24 2.53 5.07 1.56l8.5-4.5c1.29-.68 2.06-2.04 1.99-3.49-.07-1.42-.94-2.68-2.23-3.25zm-.23 5.86-8.5 4.5c-1.34.71-3.01.2-3.72-1.14-.71-1.34-.2-3.01 1.14-3.72l2.04-1.08v-1.21l-.69-.28-1.11-.46c-.99-.41-1.65-1.35-1.7-2.41-.05-1.06.52-2.06 1.46-2.56l8.5-4.5c1.34-.71 3.01-.2 3.72 1.14.71 1.34.2 3.01-1.14 3.72L15.5 9.26v1.21l1.8.74c.99.41 1.65 1.35 1.7 2.41.05 1.06-.52 2.06-1.46 2.56z"></path></svg>',
            'title' => 'Shorts',
            'link' => '/',
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M10 18v-6l5 3-5 3zm7-15H7v1h10V3zm3 3H4v1h16V6zm2 3H2v12h20V9zM3 10h18v10H3V10z"></path></svg>',
            'title' => 'Подписки',
            'link' => '/about',
        ],
        
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M10 9.35 15 12l-5 2.65zM12 7a5 5 0 105 5 5 5 0 00-5-5m0-1a6 6 0 11-6 6 6 6 0 016-6zm0-3a9 9 0 109 9 9 9 0 00-9-9m0-1A10 10 0 112 12 10 10 0 0112 2z"></path></svg>',
            'title' => 'YouTube Music',
            'link' => '/portfolio',
        ],
        [
        'hr' => true,
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="m11 7 6 3.5-6 3.5V7zm7 13H4V6H3v15h15v-1zm3-2H6V3h15v15zM7 17h13V4H7v13z"></path></svg>',
            'title' => 'Библиотека',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" style="pointer-events: none; display: block; width: 100%; height: 100%;" viewBox="0 0 24 24" width="24" focusable="false"><g><path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM22 12c0 5.51-4.49 10-10 10S2 17.51 2 12h1c0 4.96 4.04 9 9 9s9-4.04 9-9-4.04-9-9-9C8.81 3 5.92 4.64 4.28 7.38c-.11.18-.22.37-.31.56L3.94 8H8v1H1.96V3h1v4.74c.04-.09.07-.17.11-.25.11-.22.23-.42.35-.63C5.22 3.86 8.51 2 12 2c5.51 0 10 4.49 10 10z"></path></g></svg>',
            'title' => 'История',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="m10 8 6 4-6 4V8zm11-5v18H3V3h18zm-1 1H4v16h16V4z"></path></svg>',
            'title' => 'Ваши видео',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path></svg>',
            'title' => 'Смотреть позже',
            'link' => '/contact',
        ],
        [
        'hr' => true,
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M12 9.5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5m0-1c-1.93 0-3.5 1.57-3.5 3.5s1.57 3.5 3.5 3.5 3.5-1.57 3.5-3.5-1.57-3.5-3.5-3.5zM13.22 3l.55 2.2.13.51.5.18c.61.23 1.19.56 1.72.98l.4.32.5-.14 2.17-.62 1.22 2.11-1.63 1.59-.37.36.08.51c.05.32.08.64.08.98s-.03.66-.08.98l-.08.51.37.36 1.63 1.59-1.22 2.11-2.17-.62-.5-.14-.4.32c-.53.43-1.11.76-1.72.98l-.5.18-.13.51-.55 2.24h-2.44l-.55-2.2-.13-.51-.5-.18c-.6-.23-1.18-.56-1.72-.99l-.4-.32-.5.14-2.17.62-1.21-2.12 1.63-1.59.37-.36-.08-.51c-.05-.32-.08-.65-.08-.98s.03-.66.08-.98l.08-.51-.37-.36L3.6 8.56l1.22-2.11 2.17.62.5.14.4-.32c.53-.44 1.11-.77 1.72-.99l.5-.18.13-.51.54-2.21h2.44M14 2h-4l-.74 2.96c-.73.27-1.4.66-2 1.14l-2.92-.83-2 3.46 2.19 2.13c-.06.37-.09.75-.09 1.14s.03.77.09 1.14l-2.19 2.13 2 3.46 2.92-.83c.6.48 1.27.87 2 1.14L10 22h4l.74-2.96c.73-.27 1.4-.66 2-1.14l2.92.83 2-3.46-2.19-2.13c.06-.37.09-.75.09-1.14s-.03-.77-.09-1.14l2.19-2.13-2-3.46-2.92.83c-.6-.48-1.27-.87-2-1.14L14 2z"></path></svg>',
            'title' => 'Настройки',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path></svg>',
            'title' => 'Жалобы',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%"><path d="M15.36 9.96c0 1.09-.67 1.67-1.31 2.24-.53.47-1.03.9-1.16 1.6l-.04.2H11.1l.03-.28c.14-1.17.8-1.76 1.47-2.27.52-.4 1.01-.77 1.01-1.49 0-.51-.23-.97-.63-1.29-.4-.31-.92-.42-1.42-.29-.59.15-1.05.67-1.19 1.34l-.05.28H8.57l.06-.42c.2-1.4 1.15-2.53 2.42-2.87 1.05-.29 2.14-.08 2.98.57.85.64 1.33 1.62 1.33 2.68zM12 18c.55 0 1-.45 1-1s-.45-1-1-1-1 .45-1 1 .45 1 1 1zm0-15c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path></svg>',
            'title' => 'Справка',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M13 14h-2v-2h2v2zm0-9h-2v6h2V5zm6-2H5v16.59l3.29-3.29.3-.3H19V3m1-1v15H9l-5 5V2h16z"></path></svg>',
            'title' => 'Оставить Отзыв',
            'link' => '/contact',
        ],
    ],



    // expand
     'selected_expand_index' => isset($_GET['expand_index']) ? $_GET['expand_index'] : 0,
    'expand' => [
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Rock',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Pop',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Classic',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'House',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Jazz',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Song',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Punk rock',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Disco',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Hip-Hop',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Metal',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Blues',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M22 7H2v1h20V7zm-9 5H2v-1h11v1zm0 4H2v-1h11v1zm2 3v-8l7 4-7 4z"></path></svg>',
            'title' => 'Folk',
            'link' => '/contact',
        ],
    ],


    // footer
    'links_footer' => [
    ['title' => 'О сервисе', 'url' => '#'],
    ['title' => 'Прессе', 'url' => '#'],
    ['title' => 'Связаться с нами', 'url' => '#'],
    ['title' => 'Авторам', 'url' => '#'],
    ['title' => 'Рекламодателям', 'url' => '#'],
    ['title' => 'Разработчикам', 'url' => '#'],
    ],
    'links_footer2' => [
    ['title' => 'О сервисе', 'url' => '#'],
    ['title' => 'Прессе', 'url' => '#'],
    ['title' => 'Связаться с нами', 'url' => '#'],
    ['title' => 'Авторам', 'url' => '#'],
    ['title' => 'Рекламодателям', 'url' => '#'],
    ['title' => 'Разработчикам', 'url' => '#'],
    ],
    
    

    //video
    'media'    => [
        'Deer' => [   
            'ico' => '/assets/channel_ico/JR-Bombastic_Pirates.webp',
            'title' => 'Deer',
            'video' => '/assets/02video.mp4',
            'subtitle' => 'Discovery',
            'info' => '244 тыс. просмотров'
        ],
        'Ocean' =>[   
            'ico' => '/assets/channel_ico/1551511774_9.jpg',
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        'Lynx' =>[   'ico' => '/assets/channel_ico/1677456584_bogatyr-club-p-avatarki-na-chernom-fone-foni-3.jpg',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        'Lion' =>[   'ico' => '/assets/channel_ico/images.jpeg',
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        'Ocean2' =>[   
            'ico' => '/assets/channel_ico/1551511774_9.jpg',
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx3' =>[   
            'ico' => '/assets/channel_ico/JR-Bombastic_Pirates.webp',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        'Lion4' =>[   
            'ico' => '/assets/channel_ico/7300343099db28441cbf757d1ed2fed7.png',
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        'Ocean3' =>[   
            'ico' => '/assets/channel_ico/1551511774_9.jpg',
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        'Lion5' =>[   
            'ico' => '/assets/channel_ico/7300343099db28441cbf757d1ed2fed7.png',
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx3' =>[   
            'ico' => '/assets/channel_ico/1677456584_bogatyr-club-p-avatarki-na-chernom-fone-foni-3.jpg',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        'Lunx4' =>[   
            'ico' => '/assets/channel_ico/JR-Bombastic_Pirates.webp',
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx5' =>[   
            'ico' => '/assets/channel_ico/7300343099db28441cbf757d1ed2fed7.png',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        'Lunx6' =>[   
            'ico' => '/assets/channel_ico/images.jpeg',
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx7' =>[   
            'ico' => '/assets/channel_ico/1551511774_9.jpg',
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx8' =>[   
            'ico' => '/assets/channel_ico/JR-Bombastic_Pirates.webp',
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        'Lunx9' =>[   
            'ico' => '/assets/channel_ico/1677456584_bogatyr-club-p-avatarki-na-chernom-fone-foni-3.jpg',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        'Lunx9' =>[   
            'ico' => '/assets/channel_ico/1677456584_bogatyr-club-p-avatarki-na-chernom-fone-foni-3.jpg',
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        
    ]
    //sidebar
    

]);


