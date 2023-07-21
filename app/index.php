<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('templates');
$twig   = new Environment($loader);

$page = !isset($_GET['page']) ? 'home' : $_GET['page'];

$selected_menu_index = isset($_GET['menu_index']) ? $_GET['menu_index'] : 0;

echo $twig->render('pages/' . $page . '.twig', [
    'selected_category' => isset($_GET['category']) ? $_GET['category'] : 'All',
    'categories' => [
        'All',
        'Putin Huilo',
        'Video',
        'Programming',
        'Video games',
        'Rumble',
        'Tanks',
        'Miss',
        'News',
        'Ukraine',
        'Pets',
        'New for you',
        'Youtube logo',
        'Tanks',
        'Rumble',
        'Title'
    ],
    

//Menu

'selected_menu_index' => isset($_GET['menu_index']) ? $_GET['menu_index'] : 0,
    'menu' => [
        [   
            'icon' => '<svg
							xmlns="http://www.w3.org/2000/svg"
							class="text-gray-700 h-5 w-5 hover:red-600"
							viewBox="0 0 20 20"
							fill="currentColor">
							<path
								d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
						</svg>',
            'title' => 'Home',
            'link' => '/',
        ],
        [
            'icon' => '<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="text-gray-700 w-5 h-5">
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
						</svg>',
            'title' => 'About Us',
            'link' => '/about',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.697 1c4.879.046 8.853 4.024 8.853 8.904a8.859 8.859 0 01-8.853 8.853A8.858 8.858 0 011.843 9.904C1.843 5.025 5.817 1.046 10.697 1zm3.16 5.144a4.476 4.476 0 00-3.16 1.277 4.527 4.527 0 00-3.16-1.277 4.496 4.496 0 00-4.489 4.489c0 2.511 2.378 4.722 4.489 4.722a4.496 4.496 0 004.489-4.489c0-2.51-2.379-4.722-4.489-4.722zm-4.322 4.8a1.072 1.072 0 011.043 1.043 1.072 1.072 0 01-1.043 1.043A1.072 1.072 0 016.578 11.987a1.072 1.072 0 011.043-1.043zm0 2.131a1.072 1.072 0 011.043 1.043 1.072 1.072 0 01-1.043 1.043A1.072 1.072 0 016.578 14.118a1.072 1.072 0 011.043-1.043zm0 2.13a1.072 1.072 0 011.043 1.044 1.072 1.072 0 01-1.043 1.043A1.072 1.072 0 016.578 16.248a1.072 1.072 0 011.043-1.043z" />
                </svg>',
            'title' => 'Services',
            'link' => '/services',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M1 0h18a1 1 0 011 1v18a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm0 3v2h18V3H1zm0 4v2h18V7H1zm0 4v2h18v-2H1z" />
                </svg>',
            'title' => 'Portfolio',
            'link' => '/portfolio',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
    ],

    // Menu2

    'selected_menu2_index' => isset($_GET['menu2_index']) ? $_GET['menu2_index'] : 0,
    'menu2' => [
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
    ],

    //Menu3

    'selected_menu3_index' => isset($_GET['menu3_index']) ? $_GET['menu3_index'] : 0,
    'menu3' => [
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
        [
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 h-5 w-5 hover:red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.636 2.5a.5.5 0 01.5-.5h5.728a.5.5 0 01.462.32l1.783 5.056 4.122.002c1.657 0 2.2 1.83.9 2.728L12.87 13.91l1.77 5.02a.5.5 0 01-.456.669l-5.198-.002-1.646 4.643a.5.5 0 01-.915 0l-1.645-4.643-5.199.002a.5.5 0 01-.456-.669l1.77-5.02L1.777 9.378c-1.302-.898-.757-2.728.9-2.728l4.12-.002 1.784-5.056zM10 13.475l-.854-2.428H6.18l2.308-1.88-.89-2.528 2.304 1.88 2.308-1.88-.89 2.528 2.305 1.88h-3.965L10 13.475z" clip-rule="evenodd"/>
                </svg>',
            'title' => 'Contact',
            'link' => '/contact',
        ],
    ],
    
    

    //video
    'media'    => [
        [
            'title' => 'Deer',
            'video' => '/assets/02video.mp4',
            'subtitle' => 'Discovery',
            'info' => '244 тыс. просмотров'
        ],
        [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
                [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
                [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        [
            'title' => 'Deer',
            'video' => '/assets/02video.mp4',
            'subtitle' => 'Discovery',
            'info' => '44 тыс. просмотров'
        ],
        [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Ocean',
            'video' => '/assets/06video.mp4',
            'subtitle' => 'Earth',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lion',
            'video' => '/assets/04video.mp4',
            'subtitle' => 'Discovery',
            'info' => '4 тыс. просмотров'
        ],
        [
            'title' => 'Lynx',
            'video' => '/assets/03video.mp4',
            'subtitle' => 'Discovery',
            'info' => '22 тыс. просмотров'
        ],
    ]
    //sidebar
    

]);


