<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin;
use CodeIgniter\HTTP\RequestInterface;

class Authentication extends BaseController
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    public function formLogin()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $data = $this->request->getPost();
        
        $checkLogin = $this->adminModel->where([
            'username' => $data['username'],
            'password' => md5($data['password']),
        ])->first();
        
        if (!$checkLogin) {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->back();
        }

        session()->set('user', $checkLogin);
    }
}
