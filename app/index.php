<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('templates');
$twig   = new Environment($loader);

$page = !isset($_GET['page']) ? 'home' : $_GET['page'];

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
        'Youtubelogo',
        'Tanks',
        'Rumble',
        'Title'
    ],
    

//Test


'menus' =>  [
    [  'icon' => '<svg
					xmlns="http://www.w3.org/2000/svg"
					class="text-gray-700 h-5 w-5 hover:red-600"
					viewBox="0 0 20 20"
					fill="currentColor">
					<path
					d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
					</svg>',
        'link' => 'Home',
        'url' => '#',
    ],
    [  'icon' => '<svg
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
        'link' => 'Trending',
        'url' => '#',
    ],
    [  'icon' => '<svg
							xmlns="http://www.w3.org/2000/svg"
							class="text-gray-700 h-5 w-5 hover:red-600"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
							stroke-width="2">
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
						</svg>',
        'link' => 'Subscriptions',
        'url' => '#',
    ],
    [  'icon' => '<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="text-gray-700 h-5 w-5 hover:red-600">
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
						</svg>',
        'link' => 'Originals',
        'url' => '#',
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


