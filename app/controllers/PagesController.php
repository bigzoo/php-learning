<?php

namespace App\Controllers;

use App\Core\App;

class PagesController{

  public function home()  {

    $users = App::get('database')->selectAll('users');

    $title = 'Home';


    return view('index');

  }

  public function about()  {

    $title = 'About Us';

    return view('about', compact('title'));

  }

  public function contact()  {

    $title = 'Contact Us';

    return view('contact',  compact('title'));

  }

  public function aboutCulture(){

    $title = 'About Us | Our Culture';

    return view('about-culture', compact('title'));

  }
}
