<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $galleries = $this->galleryModel->getGalleries();
        return view('gallery', compact('galleries'));
    }

    public function create(){

        // dd($this->request->getFile('gambar')->isValid());
        
        $this->galleryModel->createGallery();
        return redirect()->to('/kelola-gallery');
    }

    public function editGallery($id){
        $gallery = $this->galleryModel->getGallery($id);
        return view('edit_gallery', compact('gallery'));
    }

    public function update($id){
        $this->galleryModel->updateGallery($id);
        return redirect()->to('/kelola-gallery');
    }

    public function delete($id){
        $this->galleryModel->deleteGallery($id);
        return redirect()->to('/kelola-gallery');
    }
}