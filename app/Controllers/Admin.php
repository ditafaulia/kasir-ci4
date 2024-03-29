<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        $data=[
            'judul' =>'Dashboard',
            'subjudul' => '',
            'menu'=> 'Dashboard',
            'submenu' => '',
            'page'=> 'v_admin',
        ];
        return view('v_template', $data);
    }
    public function setting()
    {
        $data=[
            'judul' =>'Setting',
            'subjudul' => '',
            'menu'=> 'setting',
            'submenu' => '',
            'page'=> 'v_setting',
        ];
        return view('v_template', $data);

    }
    
}