<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class admin extends BaseController
{
    public function editData(): string
    {
        $id = $_GET['id'];
        // print_r($id);
        // die;
        $curl['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl['endpoint'] = ['admin/product/detail'];
        $curl['method'] = ['GET'];
        $curl['params'] = [
            'id' => $id,
        ];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = 10;
        $curl['timeout'] = [1];
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $curl['http_header'] = [
            'Token' => 'YmFrcGlhMTIzNDU2',
        ];
        $data = curlSetOptGet($curl);
        $data = json_decode($data, true);


        $curl_c['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl_c['endpoint'] = ['listpublic/category'];
        $curl_c['method'] = ['GET'];
        $curl_c['pagination'] = ['false'];
        $curl_c['max_redirect'] = 10;
        $curl_c['timeout'] = [1];
        $curl_c['follow_location'] = true;
        $curl_c['return_transfer'] = true;
        $curl_c['http_header'] = [
            'Token' => 'YmFrcGlhMTIzNDU2',
        ];
        $data_category = curlSetOptGet($curl_c);
        $data_category = json_decode($data_category, true);

        $curl_v['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl_v['endpoint'] = ['listpublic/value'];
        $curl_v['method'] = ['GET'];
        $curl_v['pagination'] = ['false'];
        $curl_v['max_redirect'] = 10;
        $curl_v['timeout'] = [1];
        $curl_v['follow_location'] = true;
        $curl_v['return_transfer'] = true;
        $curl_v['http_header'] = [
            'Token' => 'YmFrcGlhMTIzNDU2',
        ];
        $data_value = curlSetOptGet($curl_v);
        $data_value = json_decode($data_value, true);

        $curl_t['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl_t['endpoint'] = ['listpublic/type'];
        $curl_t['method'] = ['GET'];
        $curl_t['pagination'] = ['false'];
        $curl_t['max_redirect'] = 10;
        $curl_t['timeout'] = [1];
        $curl_t['follow_location'] = true;
        $curl_t['return_transfer'] = true;
        $curl_t['http_header'] = [
            'Token' => 'YmFrcGlhMTIzNDU2',
        ];
        $data_type = curlSetOptGet($curl_t);
        $data_type = json_decode($data_type, true);
        // print_r($data);
        // die;
        return view(
            'admin_page/admin/edit_data',
            [
                'title' => 'Griya Bakpia | Produk',
                'data_edit' => $data,
                'data_category' => $data_category,
                'data_value' => $data_value,
                'data_type' => $data_type
            ]

        );
    }

    public function posteditdata()
    {

        $post = $this->request->getPost();

        $id = $post['id'];
        $name = $post['namaProduk'];
        $category = $post['category'];
        $unit = $post['unit'];
        $stock = $post['stock'];
        $buy = $post['buy'];
        $sell = $post['sell'];

        // curl
        $curl_c['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl_c['endpoint'] = ['admin/product/update'];
        $curl_c['params'] = ['id' => $id];
        $curl_c['http_header'] = ['Token' => 'dmlub0BnbWFpbC5jb20xMjM0NTY='];
        $curl_c['post_field'] = [
            'product' => $name,
            'buy' => $buy,
            'sell' => $sell,
            'stock' => $stock,
            'category' => $category,
            'unit' => $unit
        ];

        curlSetOptPost($curl_c);

        return view('admin_page/admin/edit_data');
    }


    public function addData(): string
    {
        $curl['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl['endpoint'] = ['listpublic/listproduct'];
        $curl['method'] = ['GET'];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = 10;
        $curl['timeout'] = 1;
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $data = curlSetOptGet($curl);
        $data = json_decode($data, true);
        // print_r($data);
        // die;

        $default = [
            "status" => 200,
            "message" => "List Product",
            "error" => "",
            "result" => [
                [
                    "id" => "279",
                    "product" => "Mie Aceh",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "350",
                    "stock" => "56"
                ],
                [
                    "id" => "280",
                    "product" => "Ayam Geprek",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "700",
                    "stock" => "258"
                ],
                [
                    "id" => "282",
                    "product" => "Ayam Goreng",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "700",
                    "stock" => "98"
                ],
                [
                    "id" => "283",
                    "product" => "Mie Rendang",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "300",
                    "stock" => "498"
                ],
                [
                    "id" => "284",
                    "product" => "Mie Soto",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "300",
                    "stock" => "498"
                ],
                [
                    "id" => "285",
                    "product" => "Ayam Rendang",
                    "category" => "Makanan",
                    "unit" => "Piring",
                    "price_sell" => "1000",
                    "stock" => "999"
                ],
                [
                    "id" => "289",
                    "product" => "Es Teh",
                    "category" => "Minuman",
                    "unit" => "Gelas",
                    "price_sell" => "800",
                    "stock" => "100"
                ],
                [
                    "id" => "290",
                    "product" => "Es Jeruk",
                    "category" => "Minuman",
                    "unit" => "Gelas",
                    "price_sell" => "800",
                    "stock" => "100"
                ],
                [
                    "id" => "291",
                    "product" => "Teh anget",
                    "category" => "Minuman",
                    "unit" => "Gelas",
                    "price_sell" => "800",
                    "stock" => "100"
                ],
                [
                    "id" => "292",
                    "product" => "Kelapa",
                    "category" => "Minuman",
                    "unit" => "Gelas",
                    "price_sell" => "800",
                    "stock" => "100"
                ]
            ]
        ];

        if (empty($data)) {
            return view(
                'admin_page/admin/add_data',
                [
                    'title' => 'Griya Bakpia | Produk',
                    'data_get' => $default
                ]

            );
        } else {
            return view(
                'admin_page/admin/add_data',
                [
                    'title' => 'Griya Bakpia | Produk',
                    'data_get' => $data
                ]

            );
        }
    }


    public function login_page($token = null)
    {
        if (!empty($token)) {
            setCookie('Token', $token, time() + (3600));
            return $this->admin();
        }
        // check cookie 

        $getCookie = $this->request->getCookie();
        if (!empty($getCookie['Token'])) {
            $cookie = true;
        } else {
            $cookie = false;
        }
        if ($cookie == true) {
            $cookie = $_COOKIE['Token'];
            $result = $this->check_cookie($cookie);
            // print_r($result);
            // die;
            if ($result == 200) {
                return $this->admin();
            } else {
                return view('admin_page/login');
            }
        } else {
            return view('admin_page/login');
        }
    }

    public function login_post()
    {
        // get username and password
        $post = $this->request->getPost();
        $username = $post['username'];
        $password = $post['password'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://10.10.0.53/coba-coba-wir/publiclogin/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'username' => $username,
                'password' => $password
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $token = $response['result'];

        // Auth Token
        $result = $this->check_cookie($token);

        if ($result == 200) {
            $statusToken = $token;
            return $this->login_page($statusToken);
        } else {
            echo "salah lol";
            die;
        }
    }

    public function check_cookie($token)
    {
        $curl['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl['endpoint'] = ['admin/listuser/list_admin'];
        $curl['method'] = ['GET'];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = 10;
        $curl['timeout'] = [1];
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $curl['http_header'] = [
            'Token' => $token,
        ];
        $data = curlSetOptGet($curl);
        $data = json_decode($data, true);

        if (isset($data['code'])) {
            return 500;
        }
        if (isset($data['status'])) {
            if ($data['status'] == 200) {
                return 200;
            } else {
                return 401;
            }
        }
    }

    public function admin(): string
    {
        $curl['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
        $curl['endpoint'] = ['listpublic/product'];
        $curl['method'] = ['GET'];
        $curl['pagination'] = ['false'];
        $curl['max_redirect'] = 10;
        $curl['timeout'] = [1];
        $curl['follow_location'] = true;
        $curl['return_transfer'] = true;
        $data = curlSetOptGet($curl);
        $data = json_decode($data, true);
        // print_r($data);
        // die;

        // $default = [
        //     "status" => 200,
        //     "message" => "List Data Product",
        //     "error" => "",
        //     "result" => [
        //         [
        //             "product" => "Kacang Hijau",
        //             "value" => "15",
        //             "type" => "Griya Bakpia Premium",
        //             "category" => "Basah",
        //             "price" => "40000"
        //         ],
        //         [
        //             "product" => "Keju",
        //             "value" => "15",
        //             "type" => "Griya Bakpia Premium",
        //             "category" => "Basah",
        //             "price" => "40000"
        //         ],
        //         [
        //             "product" => "Coklat",
        //             "value" => "15",
        //             "type" => "Griya Bakpia Premium",
        //             "category" => "Basah",
        //             "price" => "40000"
        //         ],
        //         [
        //             "product" => "Durian",
        //             "value" => "15",
        //             "type" => "Griya Bakpia Premium",
        //             "category" => "Basah",
        //             "price" => "40000"
        //         ],
        //         [
        //             "product" => "Mix",
        //             "value" => "15",
        //             "type" => "Griya Bakpia Premium",
        //             "category" => "Basah",
        //             "price" => "42000"
        //         ],
        //         [
        //             "product" => "Kacang Hijau Originial",
        //             "value" => "20",
        //             "type" => "Bakpia 465",
        //             "category" => "Basah",
        //             "price" => "24000"
        //         ],
        //         [
        //             "product" => "Kacang Hijau Rasa Keju",
        //             "value" => "20",
        //             "type" => "Bakpia 465",
        //             "category" => "Basah",
        //             "price" => "26000"
        //         ],
        //         [
        //             "product" => "Kacang Hijau Rasa Coklat",
        //             "value" => "20",
        //             "type" => "Bakpia 465",
        //             "category" => "Basah",
        //             "price" => "26000"
        //         ],
        //         [
        //             "product" => "Telo Ungu",
        //             "value" => "15",
        //             "type" => "Bakpia 465",
        //             "category" => "Basah",
        //             "price" => "24000"
        //         ],
        //         [
        //             "product" => "Keju",
        //             "value" => "20",
        //             "type" => "Bakpia 465 Kering",
        //             "category" => "Kering",
        //             "price" => "24000"
        //         ],
        //         [
        //             "product" => "Coklat",
        //             "value" => "20",
        //             "type" => "Bakpia 465 Kering",
        //             "category" => "Kering",
        //             "price" => "24000"
        //         ],
        //         [
        //             "product" => "Aneka Rasa",
        //             "value" => "20",
        //             "type" => "Bakpia 465 Kering",
        //             "category" => "Kering",
        //             "price" => "24000"
        //         ],
        //         [
        //             "product" => "Mix Keju Coklat",
        //             "value" => "20",
        //             "type" => "Bakpia 465 Kering",
        //             "category" => "Kering",
        //             "price" => "24000"
        //         ]
        //     ]
        // ];



        if (empty($data)) {
            return view(
                'admin_page/admin/admin',
                [
                    'title' => 'Griya Bakpia | Produk',
                    //'data_get' => $default
                ]

            );
        } else {
            return view(
                'admin_page/admin/admin',
                [
                    'title' => 'Griya Bakpia | Produk',
                    'data_get' => $data
                ]

            );
        }
    }







    // public function login_page(): string
    // {
    //     //$post = $this->request->getPost();
    //     //$email = htmlspecialchars($post['email']);
    //     //$password = htmlspecialchars($post['password']);
    //     //print_r($email); die;
    //     $curl['url'] = ['http://10.10.0.53/coba-coba-wir/public'];
    //     $curl['endpoint'] = ['login/login'];
    //     $curl['method'] = ['POST'];
    //     $curl['return_transfer'] = true;
    //     $curl['max_redirect'] = 10;
    //     $curl['timeout'] = 0;
    //     $curl['follow_location'] = true;
    //     // $curl['http_header'] = ['ceritane token'];
    //     $curl['post_field'] = ['name' => 'vfvsfgfas'];
    //     $dd = curlSetOptPost($curl);
    //     $decode = json_decode($dd, true);
    //     // print_r($decode);
    //     // die;

    //     return view(
    //         'admin_page/login',
    //         [
    //             'data' => $decode
    //         ]

    //     );
    // }

    // public function login_post(): string
    // {
    //     // get username and password
    //     $post = $this->request->getPost();
    //     $username = $post['username'];
    //     $password = $post['password'];

    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'http://10.10.0.53/coba-coba-wir/publiclogin/login',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => array(
    //             'username' => $username,
    //             'password' => $password
    //         ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);
    //     $response = json_decode($response, true);
    //     // print_r($response);
    //     // die;

    //     if ($response['status'] == 200) {
    //         return $this->admin();
    //     } else {
    //         return view(
    //             'admin_page/eror',
    //             [
    //                 'data' => $response
    //             ]
    //         );
    //     }
    // }
}
