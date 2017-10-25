<?php

class UsersController{

  public function index(){

    $users = App::get('database')->selectAll('users');

    $title = 'All Users';

    return view('users', compact('title', 'users'));
  }

  public function store(){
    App::get('database')->insert(
      'users',
      [
        'name' => $_POST['name']
      ]
    );

    return redirect('users');

  }
}
