<?php

namespace App\Controllers;

class Auth extends BaseController
{


    public function login(){
        return view('login');
    }


    public function doLogin(){

        $db = \Config\Database::connect();
        $builder = $db->table('karyawan');

        $user = $this->request->getVar('user');
        $pass = $this->request->getVar('pass');

        $row = $builder
        ->getWhere(['username' => $user, 'password' => $pass])->getRow();

        if($row != NULL){

            $data = [
                'username' => $row->username,
                'nama' => $row->nama_karyawan,
                'log' => true
            ];

            session()->set($data);
            return redirect()->to('/kelola-pinjaman');
        } else {
            session()->setFlashdata('msg', 'Username atau Password Salah');
            return redirect()->to('/login');
        }
    }
    
    public function doLogout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}