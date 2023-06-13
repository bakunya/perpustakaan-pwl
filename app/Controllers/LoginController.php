<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    function index()
    {
        return view('login');
    }

    function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('email', $email)->first();

        var_dump($user);

        if ($user && $user['password'] == $password) {
            // Jika kredensial benar, simpan informasi pengguna ke dalam sesi
            $session = session();
            $session->set([
                'email' => $user['email'],
                'logged_in' => true
            ]);

            // Redirect ke halaman dashboard atau halaman yang sesuai setelah login berhasil
            return redirect()->to('/dashboard');
        } else {
            // Jika kredensial salah, tampilkan pesan error di halaman login
            $data['error'] = 'Email atau kata sandi salah';
            return view('login', $data);
        }
    }
}
