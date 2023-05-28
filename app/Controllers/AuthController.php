<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        // Tampilkan halaman registrasi
        return view('register');
    }

    public function processRegister()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[5]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'email'    => 'required|valid_email|is_unique[users.email]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Tampilkan halaman registrasi dengan error validasi
            return view('register', ['validation' => $validation]);
        }

        // Simpan data pengguna ke dalam database
        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email'    => $this->request->getPost('email'),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
    }

    public function login()
    {
        // Tampilkan halaman login
        return view('login3');
    }

    public function processLogin()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Tampilkan halaman login dengan error validasi
            return view('login', ['validation' => $validation]);
        }

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cek apakah pengguna ada dalam database
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session pengguna
                session()->set([
                    'username'  => $user['username'],
                    'logged_in' => true,
                ]);

                // Redirect ke halaman dashboard atau halaman lain yang diinginkan
                return redirect()->to('/orders');
            }
        }

        // Jika login gagal, tampilkan halaman login dengan pesan error
        return view('login', ['error' => 'Username atau password salah']);
    }

    public function logout()
    {
        // Hapus session pengguna
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to('/login');
    }
}
