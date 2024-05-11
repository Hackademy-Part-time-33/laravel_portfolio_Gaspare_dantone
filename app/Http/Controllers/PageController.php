<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }//

    public function aboutme() {
        return view('aboutme');
    }

    public static $servizi = [
        [
            'uri' => 'gestionale',
            'name' => 'Sistema Gestionali',
            'costo' => 1500,
            'tempo_di_realizzazione' => '2 settimane',
            'img' => '/media/planet.jpg'
        ],
        [
            'uri' => 'ecommerce',
            'name' => 'Piattaforma eCommerce',
            'costo' => 2500,
            'tempo_di_realizzazione' => '3 settimane',
            'img' => '/media/planet.jpg'
        ],
        [
            'uri' => 'siti-web',
            'name' => 'Siti Web',
            'costo' => 1000,
            'tempo_di_realizzazione' => '1 settimana',
            'img' => '/media/planet.jpg'
        ],
        [
            'uri' => 'consulenza',
            'name' => 'Consulenza Web',
            'costo' => 3500,
            'tempo_di_realizzazione' => '4 settimane',
            'img' => '/media/planet.jpg'
        ],
    ];

    public function service() {
        


       return view('service', ['servizi'=>self::$servizi]);
    }
    
    
        

    
    public function detail($service) {
       
        
        foreach(self::$servizi as $element){
            if ($service == $element['uri']) {
                # code...
                return view('detail', ['service' => $element]) ;
            }
            
        }
        abort(404);
        


    }





}

