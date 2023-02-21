<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if($keyword){
            $book = $this->bookModel->search($keyword);
        } else {
            $book = $this->bookModel;

        }

        $data = [
            'books' => $book->paginate(3, 'book'),
            'pager' => $this->bookModel->pager
        ];
        return view('home', $data);
    }

    public function gallery(){
        $data = [
            'galleries' => $this->galleryModel->getGalleries()
        ];

        return view('front_gallery',$data);
    }
}
