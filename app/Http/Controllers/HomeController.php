<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
  public function index() {

    $seo = [
      'title' => 'Primera herramienta de gestión educacional | Educk',
      'desc' => 'EDUCK, Nuestra plataforma te ofrece la capacidad de recopilar, analizar y presentar datos de manera efectiva.

      Detecta patrones que antes pasaban desapercibidos, identifica tendencias que te guiarán hacia el éxito y destaca las características clave que marcan la diferencia.
      La Analítica Descriptiva de  te proporciona el conocimiento necesario para tomar decisiones informadas y estratégicas. Ya no te conformes con suposiciones, ¡haz elecciones basadas en datos concretos!',
      'keywords' => ['herramienta de gestión educacional', 'plataforma educativa', 'analítica de datos', 'tendencias', 'decisiones informadas', 'estrategias educativas'],
      'image' => asset('me/favicon-educk.svg'),
      'url' => 'https://www.educk.cl/'
    ];

    SEO::setTitle($seo['title']);
    SEO::setDescription($seo['desc']);

    SEO::metatags()->setKeywords($seo['keywords']);

    SEO::opengraph()->setType('website'); // Cambia 'website' por el tipo correcto
    SEO::opengraph()->setTitle($seo['title']);
    SEO::opengraph()->setDescription($seo['desc']);
    SEO::opengraph()->setUrl( $seo['url']);
    SEO::opengraph()->addImage($seo['image']);

    // SEO::metatags()->setOpenGraph([
    //     'type' => 'website', // 'website
    //     'title' =>  $seo['title'],
    //     'description' =>  $seo['desc'],
    //     'image' => $seo['image'],
    //     'url' => $seo['url']
    // ]);

    // SEO::opengraph()->setUrl('https://www.nigmacode.com');
    SEO::setCanonical($seo['url']);
    SEO::metatags()->setCanonical($seo['url']);
    // SEO::generateSitemap();


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
