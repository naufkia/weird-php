<?php namespace Apk\Kontolers;

use Apk\Modols\HomeModol;

class HomeKntl {
    public function __construct() {
        $this->HomeModol = new HomeModol();
    }

    public function index() {
//        $get_user = $this->HomeModol->get_users_active();
//        dd($get_user); // use d() or dd() for dump!
        $data['title'] = 'Hello World';
        $data['subtitle'] = 'Kyaaaa Weird PHP Framework';
        return view('home', $data);
    }
}
