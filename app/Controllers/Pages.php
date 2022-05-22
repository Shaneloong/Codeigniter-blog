<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data = $model->getPosts();


        return view('pages/home', [
            'news' => $data
        ]);
    }

    public function about(){
        return view('pages/about');
    }

    public function show($page = 'home'){

        if(! is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        // echo view('templates/header');;
        // echo view('pages/' . $page);;
        // echo view('templates/footer');

        return view('pages/' . $page);
    }
}
