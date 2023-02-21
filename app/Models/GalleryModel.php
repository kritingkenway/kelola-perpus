<?php

namespace App\Models;

use \CodeIgniter\Model;

class GalleryModel extends Model {

    protected $table = 'gallery';

    protected $allowedFields = [
        'deskripsi',
        'gambar'
    ];



    protected $request;

    public function initialize(){
        $this->request = \Config\Services::request();
    }

    public function getGalleries(){
        return $this->findAll();
    }
    public function getGallery($id){
        return $this->find($id);
    }

    public function createGallery(){
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()){

            $file->move('img/');
            $data = [
                'deskripsi' => $this->request->getVar('deskripsi'),
                'gambar' => $file->getName()
            ];
        } 
        $this->insert($data);
    }

    public function updateGallery($id){

        $file = $this->request->getFile('gambar');
        $gambar = $this->getGallery($id)['gambar'];
        if($file->isValid() && !$file->hasMoved()){
            unlink(FCPATH . 'img/' . $gambar );
            $file->move('img/');
            $data = [
                'deskripsi' => $this->request->getVar('deskripsi'),
                'gambar' => $file->getName()
            ];
        } else {
            $data = [
                'deskripsi' => $this->request->getVar('deskripsi')
            
            ];
        }

        $this->update($id,$data);

    }


    public function deleteGallery($id){
        $gambar = $this->getGallery($id)['gambar'];
        
    
        unlink(FCPATH. 'img/' . $gambar);
        

        $this->delete($id);
    }
    
}