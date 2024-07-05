<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $curl['url'] = ['https://pitekapi.000webhostapp.com/'];
        $curl['endpoint'] = ['listpublic/listproduct'];
        $curl['method'] = ['GET'];
        $curl['return_transfer'] = true;
        $curl['max_redirect'] = [10];
        $curl['timeout'] = [0];
        $curl['follow_location'] = true;
        $curl['http_header'] = ['ceritane token'];
        $curl['pagination'] = ['false'];
        $dd = curlSetOptGet($curl);
        $decode = json_decode($dd, true);
        // print_r($decode);
        // die;
        return view(
            'pages/main',
            [
                'title' => 'Griya Bakpia',
                'data_get' => $decode
            ]

        );
    }

    // public function produk()
    // {
    //     $curl['url'] = ['https://pitekapi.000webhostapp.com'];        
    //     $curl['endpoint'] = ['listpublic/listproduct'];
    //     $curl['method'] = ['GET'];
    //     $curl['pagination'] = ['false'];
    //     $curl['max_redirect'] = [10];
    //     $curl['timeout'] = [1];
    //     $curl['follow_location'] = true;
    //     $curl['return_transfer'] = true;
    //     $data = curlSetOptGet($curl);
    //     $data = json_decode($data, true);
    //     // print_r($data);
    //     // die;
    //     return view(
    //         'pages/produk',
    //         [
    //             'title' => 'Griya Bakpia | Produk',
    //             'data_get' => $data
    //         ]

    //     );
    // }
    public function tentang()
    {
        $data = [
            'title' => 'Griya Bakpia | About'
        ];
        return view('pages/tentang', $data);
    }
    public function toko()
    {
        $data = [
            'title' => 'Griya Bakpia | Toko'
        ];
        return view('pages/toko', $data);
    }
    public function loginUser()
    {
        return view('pages/login');
    }
    public function signUpUser()
    {
        return view('pages/signup');
    }


    // public function pagination()
    // {
    //     $pagi = $this->request->getGet();
    //     $pagi = $pagi['page'];
    //     // print_r($pagi);
    //     // die;
    //     // $keyword = $_POST['keyword'];
    //     // print_r($keyword);
    //     // die;
    //     $curl['url'] = ['https://pitekapi.000webhostapp.com'];        
    //     $curl['endpoint'] = ['listpublic/listproduct'];
    //     $curl['method'] = ['GET'];
    //     $curl['params'] = [
    //         'page' => $pagi,
    //     ];
    //     $curl['pagination'] = ['true'];
    //     $curl['max_redirect'] = [10];
    //     $curl['timeout'] = [1];
    //     $curl['follow_location'] = true;
    //     $curl['return_transfer'] = true;
    //     // $curl['http_header'] = [
    //     //     'Token' => 'dmlub0BnbWFpbC5jb20xMjM0NTY=',
    //     // ]; 
    //     $data = curlSetOptGet($curl);
    //     $data = json_decode($data, true);
    //     // print_r($data);
    //     // die;
    //     return view(
    //         'pages/produk',
    //         [
    //             'title' => 'Griya Bakpia | Produk',
    //             'data_page' => $pagi
    //             // 'data_get' => $data
    //         ]

    //     );
    // }

    public function produk()
    {
        $curl['url'] = ['https://pitekapi.000webhostapp.com'];
        $curl['endpoint'] = ['listpublic/listproduct'];
        $curl['method'] = ['GET'];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = [10];
        $curl['timeout'] = [1];
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $data = curlSetOptGet($curl);
        $data = json_decode($data, true);
        // print_r($data);
        // die;
        $pagi = $this->request->getGet();

        if (!empty($pagi['page'])) {
            $pagi = $pagi['page'];
            $curl_pagi['url'] = ['https://pitekapi.000webhostapp.com'];
            $curl_pagi['endpoint'] = ['listpublic/listproduct'];
            $curl_pagi['method'] = ['GET'];
            $curl_pagi['params'] = [
                'page' => $pagi,
            ];
            $curl_pagi['pagination'] = ['true'];
            $curl_pagi['max_redirect'] = [10];
            $curl_pagi['timeout'] = [1];
            $curl_pagi['follow_location'] = true;
            $curl_pagi['return_transfer'] = true;
            // $curl_pagi['http_header'] = [
            //     'Token' => 'dmlub0BnbWFpbC5jb20xMjM0NTY=',
            // ]; 
            $data_pagi = curlSetOptGet($curl_pagi);
            $data_pagi = json_decode($data_pagi, true);
        } else {
            $data_pagi = [];
        }
        // print_r($data_pagi);
        // die;
        return view(
            'pages/produk',
            [
                'title' => 'Griya Bakpia | Produk',
                'data_get' => $data,
                'data_page' => $data_pagi
            ]

        );
    }

    public function search()
    {

        $keyword = $_POST['keyword'];
        // print_r($keyword);
        // die;
        $curl['url'] = ['https://pitekapi.000webhostapp.com'];
        $curl['endpoint'] = ['listpublic/listproduct'];
        $curl['params'] = ['search' => $keyword];
        $curl['method'] = ['GET'];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = [10];
        $curl['timeout'] = [1];
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $data = curlSetOptGet($curl);
        // $data = json_decode($data, true);
        print_r($data);     
        die;
        $card = '
        <div class="card_produk">
            <div class="card">
                <img src="/img/pitek.jpg" alt="" />
                <div class="card_text">
                    <p>' . $data . '</p>
                </div>
            </div>
        </div>
        ';
        print_r($card);
        die;

        // return view(
        //     'pages/produk',
        //     [
        //         'title' => 'Griya Bakpia | Produk',
        //         'data_get' => $data
        //     ]

        // );

    }
}
