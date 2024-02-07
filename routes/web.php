<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $websiteInJson = [
        'meta'=>[
            'title'=>'AlphadeX.bg',
            'description'=>'Buy & Sell Cryptocurrencies easy!',
        ],
        'header'=>[
            'menu'=>[
                'name'=>'Main menu',
                'items'=>[
                    [
                        'title'=>'Начало',
                        'url'=>'/'
                    ],
                    [
                        'title'=>'Валути',
                        'url'=>'/about'
                    ],
                    [
                        'title'=>'Магазин',
                        'url'=>'/services'
                    ],
                    [
                        'title'=>'Контакти',
                        'url'=>'/contact'
                    ]
                ]
            ],
            'logo'=>[
                //'url'=>'/logo.png',
                'alt'=>'AlphadeX.bg',
                'link'=>'/'
            ],
            'social'=>[
                [
                    'title'=>'Facebook',
                    'url'=>'https://facebook.com'
                ],
                [
                    'title'=>'Twitter',
                    'url'=>'https://twitter.com'
                ],
                [
                    'title'=>'Instagram',
                    'url'=>'https://instagram.com'
                ],
            ],
            'action'=>[
                [
                    'type'=>'button',
                    'title'=>'Register',
                    'url'=>'/register',
                    'style'=>'secondary'
                ],
                [
                    'type'=>'button',
                    'title'=>'Login',
                    'url'=>'/login',
                    'style'=>'primary'
                ]
            ]
        ],
        'footer'=>[
            'content'=>[
                [
                    'type'=>'text',
                    'value'=>'AlphadeX.bg'
                ],
                [
                    'type'=>'text',
                    'value'=>'Buy & Sell Cryptocurrencies easy!'
                ],
                [
                    'type'=>'button',
                    'value'=>'Contact us',
                    'url'=>'/contact'
                ]
            ]
        ],
        'sections'=>[
            'section1'=>[
                'backgroundSettings'=>[
                    'image'=>'bg1.jpg'
                ],
                'gridSettings'=>[
                    'gridGap'=>12,
                    'gridTemplateColumns'=>20,
                    'gridTemplateRows'=>20
                ],
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'<h1>Изградете своето крипто портфолио</h1>',
                        'gridArea'=>'9 / 3 / 13 / 11'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'<p>Възползвай се от най-добрите цени на пазара с избор от над 30+ криптовалути.</p>',
                        'gridArea'=>'11 / 3 / 13 / 11'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'<p>Обменяй криптовалутите си на най-добрите цени на Българския пазар...</p>',
                        'gridArea'=>'11 / 3 / 13 / 11'
                    ],
                    [
                        'type'=>'button',
                        'value'=>'Регистрация',
                        'url'=>'/gallery',
                        'gridArea'=>'13 / 3 / 16 / 6',
                        'style'=>'primary'
                    ]
                ]
            ],
            'section2'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'Our services'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'We offer the following services:'
                    ],
                    [
                        'type'=>'list',
                        'items'=>[
                            'Service 1',
                            'Service 2',
                            'Service 3'
                        ]
                    ]
                ]
            ],
            'section3'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'Contact us'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'You can contact us at:'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'123-456-789'
                    ]
                ]
            ],
            'section4'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'About us'
                    ],
                    [
                        'type'=>'text',
                        'value'=>'We are a company that does things.'
                    ],
                    [
                        'type'=>'button',
                        'value'=>'Read more',
                        'url'=>'/about'
                    ]
                ]
            ],
            'section5'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'Gallery'
                    ],
                    [
                        'type'=>'gallery',
                        'images'=>[
                            '/image1.jpg',
                            '/image2.jpg',
                            '/image3.jpg'
                        ]
                    ]
                ]
            ],
            'section6'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'Testimonials'
                    ],
                    [
                        'type'=>'testimonial',
                        'items'=>[
                            [
                                'author'=>'John Doe',
                                'text'=>'This is the best company ever'
                            ],
                            [
                                'author'=>'Jane Doe',
                                'text'=>'I love this company'
                            ]
                        ]
                    ]
                ]
            ],
            'section7'=>[
                'content'=>[
                    [
                        'type'=>'text',
                        'value'=>'Contact form'
                    ],
                    [
                        'type'=>'form',
                        'fields'=>[
                            [
                                'type'=>'text',
                                'name'=>'name',
                                'label'=>'Name'
                            ],
                            [
                                'type'=>'email',
                                'name'=>'email',
                                'label'=>'Email'
                            ],
                            [
                                'type'=>'textarea',
                                'name'=>'message',
                                'label'=>'Message'
                            ],
                            [
                                'type'=>'submit',
                                'value'=>'Send'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];
    return view('welcome',[
        'website'=>$websiteInJson
    ]);
});
