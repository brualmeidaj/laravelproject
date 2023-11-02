<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    //existem varias formas de usar o verbo get, nesse caso usaremos o metodo index, mas existe o create, store, etc...-https://laravel.com/docs/9.x/controllers#resource-controllers
    public function index()
    {
        // array de séries
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        $html = '<ul>';

        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        echo $html;
    }
}
