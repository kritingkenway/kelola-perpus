<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = [
        'npm',
        'nama',
        'semester_kelas',
        'fakultas'
    ];

    protected $request;
    public function initialize(){
        $this->request = \Config\Services::request();
    }

    public function getUsers(){
        return $this->findAll();
    }

    public function getUser($user_id){
        return $this->find($user_id);
    }
    public function createUser(){
        $npm = $this->request->getVar('npm');
        $nama = $this->request->getVar('nama');
        $semester_kelas = $this->request->getVar('semester_kelas');
        $fakultas = $this->request->getVar('fakultas');
        
        
        $data = compact('npm', 'nama','semester_kelas','fakultas');
        $this->insert($data);
    }

    public function updateUser($id){

        $npm = $this->request->getVar('npm');
        $nama = $this->request->getVar('nama');
        $semester_kelas = $this->request->getVar('semester_kelas');
        $fakultas = $this->request->getVar('fakultas');
 

        $this->update($id,compact('npm', 'nama','semester_kelas','fakultas'));
    }
}

