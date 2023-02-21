<?php

namespace App\Controllers;


class User extends BaseController
{
    public function index()
    {
        $users = $this->userModel->getUsers();
        return view('user',compact('users'));
    }
    public function create()
    {
        $requestPost = $this->request->getVar();
        $this->userModel->createUser($requestPost);
        return redirect()->to('/kelola-user');
    }
    
    public function editUser($id)
    {
        $user = $this->userModel->getUser($id);
        // dd($book);
        return view('edit_user', compact('user'));
        
    }
    
    public function update($id){

        $requestPost = $this->request->getVar();
        $this->userModel->updateUser($id, $requestPost);

        return redirect()->to('/kelola-user');

    }


    public function delete($id){
        $this->userModel->delete($id);
        return redirect()->to('/kelola-user');
    }
}
