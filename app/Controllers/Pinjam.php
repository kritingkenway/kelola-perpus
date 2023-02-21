<?php

namespace App\Controllers;





class Pinjam extends BaseController
{
    

    public function index()
    {
   
        $pinjaman = $this->pinjamModel->getPinjaman();
        
        $books = $this->bookModel->getBooks();
        $users = $this->userModel->getUsers();

        return view('pinjam', compact('pinjaman', 'books', 'users'));
    }
    #membuat data untuk dimasukan kedalam tabel pinjaman
    public function create()
    {
        
        $this->pinjamModel->createPinjaman();
        return redirect()->to('/kelola-pinjaman');
    }
    #hanya simple delete data ditabel pinjaman berdasarkan id
    public function delete($id)
    {
        $this->pinjamModel->delete($id);
        
        return redirect()->to('/kelola-pinjaman');
    }

    #mengupdate / menambah waktu pinjam yang dimulai dari waktu tanggal kembali
    public function update($id,$lama_pinjam)
    {
       
        $this->pinjamModel->updatePinjaman($id,$lama_pinjam);

        return redirect()->to('/kelola-pinjaman');
        
    }

    #menampilkan detail buku dan user/peminjam dan ditampilkan dalam Box modal saat menekan button Detail
    public function detail($book_id,$user_id) {
        

        $book = $this->bookModel->getBook($book_id);
        $user = $this->userModel->getUser($user_id);
        
        return view('display', compact('book','user'));


    }
}
