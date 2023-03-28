<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public static $films =[
        ['id' =>1,
        'films'=>'film1',
        'title' => 'interstellar',
        'cover' => '/img/esercizio/interstellar.jpg',
    ],
        ['id' =>2,
        'films'=>'film2',
        'title' => 'Lord of the Rings',
        'cover' => '/img/esercizio/lotr.jpg',
    ],
        ['id' =>3,
        'films'=>'film3',
        'title' => 'Matrix',
        'cover' => '/img/esercizio/matrix.jpg',
    ],
        ['id' =>4,
        'films'=>'film4',
        'title' => 'il Padrino',
        'cover' => '/img/esercizio/padrino.jpg',
    ],
    ['id' =>5,
    'films'=>'film5',
    'title' => 'Pulp fiction',
    'cover' => '/img/esercizio/pulp.jpg',
    ]
    ];

    public static $serieTv = [

    ['id' =>6,
    'serie'=>'serieTv1',
    'title' => 'Breaking-bad',
    'cover' => '/img/cover/breaking-bad.jpg',
    ],
    ['id' =>7,
    'serie'=>'serieTv2',
    'title' => 'Dahmer',
    'cover' => '/img/cover/dahmer.jpg',
    ],
    ['id' =>8,
    'serie'=>'serieTv3',
    'title' => 'Don Matteo',
    'cover' => '/img/cover/don-matteo.jpg',
    ],
    ['id' =>9,
    'serie'=>'serieTv4',
    'title' => 'friends',
    'cover' => '/img/cover/friends.jpg',
    ],
    ['id' =>10,
    'serie'=>'serieTv5',
    'title' => 'House of the dragon.jpg',
    'cover' => '/img/cover/hof.jpg',
    ],
    ['id' =>11,
    'serie'=>'serieTv6',
    'title' => 'The boys',
    'cover' => '/img/cover/the-boys.jpg',
    ],
    ['id' =>12,
    'serie'=>'serieTv7',
    'title' => 'The office',
    'cover' => '/img/cover/the-office.jpg',
    ]
    ];

    public function index () {
        return view('welcome');
    }
   public function catalogueFilm() {
        return view('cataloguefilms', ['films'=>self::$films]);
    }
    public function show ($id) {
        foreach(self::$films as $film){
            if($film['films']==$id) {
                return view('catalogue',['list' =>$film]);
            } 
        }
        foreach(self::$serieTv as $serie){
            if($serie['serie']==$id) {
                return view('catalogue',['list' =>$serie]);
            } 
        } 
        abort(404);
    }

    public function catalogueSeries() {
        return view('catalogueseriestv', ['series' => self::$serieTv]);
        } 
}
