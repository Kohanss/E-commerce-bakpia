<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        echo view('pages/main');
    }
    public function produk()
    {
        $data = [
            'title' => 'Produk'
        ];
        echo view('pages/produk');
    }
    public function tentang()
    {
        $data = [
            'title' => 'About'
        ];
        echo view('pages/tentang');
    }
    public function toko()
    {
        $data = [
            'title' => 'Toko'
        ];
        echo view('pages/toko');
    }
    public function loginUser()
    {
        echo view('pages/login');
    }
    public function signUpUser()
    {
        echo view('pages/signup');
    }
}
