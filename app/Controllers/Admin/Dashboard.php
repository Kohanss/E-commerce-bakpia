<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function dashboard(): string
    {
        return view('admin_page/admin');
    }

    public function login(): string
    {
        $curl['url'] = ['https://pitekapi.000webhostapp.com/'];
        $curl['endpoint'] = ['LoginSystem/login'];
        $curl['method'] = ['POST'];
        $curl['return_transfer'] = true;
        $curl['max_redirect'] = 10;
        $curl['timeout'] = 0;
        $curl['follow_location'] = true;
        // $curl['http_header'] = ['ceritane token'];
        $curl['post_field'] = ['name' => 'vfvsfgfas'];
        $dd = curlSetOptPost($curl);
        $decode = json_decode($dd, true);
        // print_r($decode);
        // die;
        return view(
            'admin_page/login',
            [
                'data' => $decode
            ]

        );
    }
}
