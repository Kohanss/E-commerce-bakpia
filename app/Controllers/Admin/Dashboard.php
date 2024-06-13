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
        return view('admin_page/login');
    }
}
