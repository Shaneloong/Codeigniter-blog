<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Entities\Post;

class Blog extends BaseController
{   
    private $model;

    public function __construct()
    {
        $this->model = new BlogModel();
    }

    public function index(){

        return view('blog/index', ['posts' => $this->model->getPosts() ]);
    }

    public function show($slug){
        if($slug != null){
            $post = $this->model->getPosts($slug);
            return view('blog/post', ['post' => $post]);
        }
    }

    public function create(){

        $blog = new Post();

        if(! $this->request->getPost()){
            return view('blog/create', [
                'post' => $blog
            ]);
        }

        $blog->fill($this->request->getPost());

        $blog->slug = url_title($blog->title);
        

        if(! $this->model->protect(false)->insert($blog) ){
            return redirect()->back()->with('errors', $this->model->errors())->withInput();
        }else{
            return redirect()->to('/')->with('info', 'Post created Successfully');
        }

    }

    public function edit($slug){
        $post = $this->model->getPosts($slug);

        return view('blog/edit', [
            'post' => $post
        ]);
    }

    public function update($id){
        $post = $this->model->getPosts($id);

        $postItems = $this->request->getPost();

        $post->fill($postItems);

        if(!$post->hasChanged()){
            return redirect()->back()->with('warning', 'No changes were made')->withInput();
        }

        if($this->model->save($post)){
            return redirect()->to("/blog/show/{$post->id}")->with('info', 'Post Updated Successfully');
        }else{
            return redirect()->back()->with('errors', $this->model->errors())->withInput();
        }
    }
}
