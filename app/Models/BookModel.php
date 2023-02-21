<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    
    protected $allowedFields = [
        'kode',
        'judul',
        'author',
        'penerbit',
        'tahun',
        'gambar'
    ];
    
    protected $request;
    public function initialize(){
        $this->request = \Config\Services::request();
    }

    
    public function getBooks(){
        return $this->findAll();
    }
    
    public function getBook($book_id){
        return $this->find($book_id);
    }

    public function search($keyword){
        return $this->table('books')->like('judul',$keyword);

    }


    public function createBuku(){
        
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()){
            
            $file->move('img/');
            
            $data = [

                'kode' => $this->request->getVar('kodebuku'),
                'judul' => $this->request->getVar('judul'),
                'author' => $this->request->getVar('author'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun' => $this->request->getVar('tahun'),
                'gambar' => $file->getName(),
            ];
            
        } else {
            $data = [

                'kode' => $this->request->getVar('kodebuku'),
                'judul' => $this->request->getVar('judul'),
                'author' => $this->request->getVar('author'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun' => $this->request->getVar('tahun'),
                'gambar' => 'default_book.jpg'
            ];

        }
        

        
        $this->insert($data);
    }
    
    public function updateBuku($id){
        
        
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()){
            unlink(FCPATH. 'img/' . $this->getBook($id)['gambar']);
            $file->move('img/');
            
            $data = [

                'kode' => $this->request->getVar('kodebuku'),
                'judul' => $this->request->getVar('judul'),
                'author' => $this->request->getVar('author'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun' => $this->request->getVar('tahun'),
                'gambar' => $file->getName(),
            ];
            
            $this->update($id,$data);
        } else {
            $data = [

                'kode' => $this->request->getVar('kodebuku'),
                'judul' => $this->request->getVar('judul'),
                'author' => $this->request->getVar('author'),
                'penerbit' => $this->request->getVar('penerbit'),
                'tahun' => $this->request->getVar('tahun'),
                
            ];
            $this->update($id,$data);
        }


    }
    public function deleteBuku($id){
        $gambar = $this->getBook($id)['gambar'];
        
        if($gambar != 'default_book.jpg'){

            unlink(FCPATH. 'img/' . $gambar);
        }
        

        $this->delete($id);
    }
}

