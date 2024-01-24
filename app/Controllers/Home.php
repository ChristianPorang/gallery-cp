<?php

namespace App\Controllers;
use App\Models\M_model;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
                echo view('navbar');

        echo view('dashboard');
        // echo view('footer');
    }
    public function gallery()
    {
    	echo view('header');
    	echo view('gallery');
    }
public function dashboard()
{
    echo view('header');
    echo view('dashboard');
    echo view('footer');
}
 public function login()
    { 

        if (session()->get('id_user') > 0) {
             return redirect()->to('/Home');
         }
       echo view('header');
       echo view('login');
       echo view('footer');        

    }
    public function aksi_login()
    {
        $u=$this->request->getPost('u');
        $p=$this->request->getPost('p');
        $where=array(
            'username'=>$u,
            'password'=>md5($p)
        );
        $model = new M_model();
        $kui=$model->getarray('user',$where);

        if ($kui>0) {
            session()->set('id_user',$kui['id_user']);
            session()->set('username',$kui['username']);
            session()->set('level',$kui['level']);
            return redirect()->to('/home');
        }else{
            return redirect()->to('Home/login');
        }
    }  


 public function keluar()
    {
        session()->destroy();
        return redirect()->to('Home/login');
    }
}
