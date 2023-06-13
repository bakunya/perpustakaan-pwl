<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{

    public function __construct()
    {
        helper('url');
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Email not found');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->to('/login')->with('error', 'Password salah');
        }

        session()->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('/dashbard');
    }
}
