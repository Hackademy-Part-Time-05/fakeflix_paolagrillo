<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{

    public static $films = [ 
        [
            'id' => 1,
            'name' => 'Dahmer',
            'cover' => "/img/esercizio/dahmer.jpg",
            'info' => 'Conosciuto come il cannibale di Milwaukee o il mostro di Milwaukee  fu responsabile di diciassette omicidi effettuati tra il 1978 e il 1991 con metodi particolarmente cruenti (contemplando atti di violenza sessuale, necrofilia, cannibalismo e squartamento). Fu condannato nel 1992 alla pena dell ergastolo per poi essere ucciso, due anni dopo, da Christopher Scarver, un detenuto sofferente di schizofrenia.'
        ],
        [
            'id' => 2,
            'name' => 'Interstellar',
            'cover' => "/img/esercizio/interstellar.jpg",
            'info' => 'Interpretato da Matthew McConaughey, Anne Hathaway, Jessica Chastain e Michael Caine, il film narra di un gruppo di astronauti che viaggiano attraverso un wormhole in cerca di una nuova casa per lumanità. Nolan ha scritto la sceneggiatura assieme a suo fratello Jonathan, che per primo sviluppò il film nel 2007. Christopher Nolan ha inoltre prodotto il film insieme a sua moglie Emma Thomas e Lynda Obst. Il fisico teorico del Caltech Kip Thorne, uno dei maggiori esperti internazionali della teoria della relatività generale, è produttore esecutivo e ha contribuito al film come consulente scientifico.[2]'
        ],
        [
            'id' => 3,
            'name' => 'lotr',
            'cover' => "/img/esercizio/lotr.jpg",
            'info' => 'Il Signore degli Anelli (The Lord of the Rings) è una trilogia colossal fantasy co-prodotta, co-scritta e diretta dal regista neozelandese Peter Jackson, basata sullomonimo romanzo scritto da J. R. R. Tolkien. La serie è formata da Il Signore degli Anelli - La Compagnia dellAnello (2001), Il Signore degli Anelli - Le due torri (2002) e Il Signore degli Anelli - Il ritorno del re (2003).'
        ],
        [
            'id' => 4,
            'name' => 'Matrix',
            'cover' => "/img/esercizio/matrix.jpg",
            'info' => 'Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dalle sorelle Lana e Lilly Wachowski (accreditate nel film come Larry e Andy Wachowski). Il film, che ha vinto numerosi premi, tra cui quattro Oscar, ha avuto un forte impatto culturale e vi sono state numerose opere che vi fanno riferimento. Nel 2012 è stato scelto per la conservazione nel National Film Registry della Biblioteca del Congresso degli Stati Uniti.[1]'
        ],
        [
            'id' => 5,
            'name' => 'Padrino',
            'cover' => "/img/esercizio/padrino.jpg",
            'info' => 'Nella religione cristiana il padrino e la madrina sono le figure, rispettivamente maschile e femminile, che accompagnano all altare il figlioccio, ossia colui che, bambino o adulto, si appresta a ricevere il Battesimo o la Cresima: essi hanno il compito di assisterlo e sostenerne, al fianco dei genitori, l educazione alla vita cristiana.'
        ],
        [
            'id' => 6,
            'name' => 'Pulp',
            'cover' => "/img/esercizio/pulp.jpg",
            'info' => 'Lo scrittore Mickey King vive a Roma sfornando una serie di romanzi hardboiled violenti e sessualmente spinti con titoli come My Gun Is Long celandosi sotto una serie di pseudonimi come "S. Odomy". A King viene offerta una somma ingente per essere lo "scrittore ombra" di un autobiografia di una celebrità misteriosa. Incuriosito l uomo accetta l offerta e viene trasportato su un isola remota (Malta, dove è stato girato il film), dove egli dovrà prendere contatto con un emissario della celebrità. King incontra un uomo di nome Miller, che si identifica come professore inglese. King presume che Miller sia il misterioso contatto fino a quando il professore non viene rinvenuto cadavere nella vasca da bagno della sua stanza d albergo.'
        ],
        ];

        public static $fictions = [ 
            [
                'id' => 1,
                'name' => 'braking-bad',
                'cover' => "/img/cover/breaking-bad.jpg",
                'episodi' => '10 episodi da vedere'
            ],
            [
                'id' => 2,
                'name' => 'don matteo',
                'cover' => "/img/cover/don-matteo.jpg",
                'episodi' => '10 episodi da vedere'        ],
            [
                'id' => 3,
                'name' => 'friend',
                'cover' => "/img/cover/friends.jpg",
                'episodi' => '10 episodi da vedere'        ],
            [
                'id' => 4,
                'name' => 'hof',
                'cover' => "/img/cover/hof.jpg",
                'episodi' => '10 episodi da vedere'        ],
            [
                'id' => 5,
                'name' => 'the boys',
                'cover' => "/img/cover/the-boys.jpg",
                'episodi' => '10 episodi da vedere'        ],
            [
                'id' => 6,
                'name' => 'the office',
                'cover' => "/img/cover/the-office.jpg",
                'episodi' => '10 episodi da vedere'        ]
            ];

        public function homepage(){
            return view('welcome');
        }

        public  function elencofilm(){
            return view('film', ['films'=>self::$films]);
        }

        public  function elencoserie(){
            return view('serie', ['fictions'=>self::$fictions]);
        }

        public function catalogofilm($id){
            foreach(self::$films as $film){
                if($film['id']==$id){
                    return view('cataloguefilm', ['film'=>$film]);
                }
            }
            abort(404);
        }

        public function catalogoserie($id){
            foreach(self::$fictions as $fiction){
                if($fiction['id']==$id){
                    return view('catalogueserie', ['fiction'=>$fiction]);
                }
            }
            abort(404);
        }
}
