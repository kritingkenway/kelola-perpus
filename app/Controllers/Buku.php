<?php

namespace App\Controllers;

class Buku extends BaseController
{

    
    public function index()
    {
        $books = $this->bookModel->getBooks();
        return view('buku',compact('books'));
    }
    public function create()
    {
        
        $this->bookModel->createBuku();
        return redirect()->to('/kelola-buku');
    }
    
    public function editBuku($id)
    {
        $book = $this->bookModel->getBook($id);
        // dd($book);
        return view('edit_buku', compact('book'));
        
    }
    
    public function update($id){

       
        $this->bookModel->updateBuku($id);

        return redirect()->to('/kelola-buku');

    }


    public function delete($id){
        $this->bookModel->deleteBuku($id);
        return redirect()->to('/kelola-buku');
    }
}
