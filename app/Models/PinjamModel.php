<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PinjamModel extends Model
{
    protected $table = 'pinjaman';
    
    protected $allowedFields = [
        'books_id',
        'users_id',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    protected $request;
    public function initialize(){
        $this->request = \Config\Services::request();
    }

    public function getPinjaman(){
        
        # Read Data

        #menggunakan INNER JOIN untuk menggabungkan tabel lain (users,books)
        #SELECT 
        #pinjaman.id,pinjaman.books_id,pinjaman.users_id, pinjaman.tanggal_pinjam, pinjaman.tanggal_kembali, books.kode, books.judul, users.npm, users.nama 
        #FROM pinjaman 
        #INNER JOIN user ON pinjaman.user_id = user.id 
        #INNER JOIN buku ON pinjaman.buku_id = buku.id 
        return $this
        ->join('users', 'ON pinjaman.users_id = users.id')
        ->join('books', 'ON pinjaman.books_id = books.id')
        ->select('pinjaman.id,pinjaman.books_id,pinjaman.users_id, pinjaman.tanggal_pinjam, pinjaman.tanggal_kembali, books.gambar, books.judul, users.nama')
        ->findAll();
    }

    public function createPinjaman(){
        $books_id = $this->request->getVar('books_id');
        $users_id = $this->request->getVar('users_id');
        $lama_pinjam = $this->request->getVar('lama_pinjam');
        $tanggal_pinjam = Time::now()->toDateString();
        $tanggal_kembali = Time::now()->addDays($lama_pinjam)->toDateString();
        
        $data = compact('books_id', 'users_id','tanggal_pinjam','tanggal_kembali');
        $this->insert($data);
    }


    public function updatePinjaman($id,$lama_pinjam){
        $pinjam = $this->find($id);
        $tanggal_pinjam = $pinjam['tanggal_kembali'];

        $tanggal_kembali = Time::parse($tanggal_pinjam)->addDays($lama_pinjam)->toDateString();

        $this->update($id,compact('tanggal_kembali'));

    }

}

