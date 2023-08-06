<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
  public function index() {
    SEO::setTitle('Educk ');
    SEO::setDescription('Ejemplo de descripción de la página');
    // SEO::opengraph()->setUrl('https://www.nigmacode.com');
    // SEO::setCanonical('https://www.nigmacode.com');
    // SEO::opengraph()->addProperty('type', 'articles');
    // SEO::twitter()->setSite('@Nigmacode');

    $imagenes = [
      'undraw_all_the_data_re_hh4w',
      'undraw_bear_market_ania',
      'undraw_booking_re_gw4j',
      'undraw_charts_re_5qe9',
      'undraw_data_points_re_vkpq',
      'undraw_spreadsheet_re_cn18',
      'undraw_work_time_re_hdyv'
    ];


    $context = [
      'banner' => asset('me/banner/'.$imagenes[array_rand($imagenes)] . '.svg')
    ];

    return view('index', compact('context'));
  }

}
