<?php 

namespace App\Models;

use CodeIgniter\Model;


class BlogModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\Post';
    protected $allowedFields = ['title', 'body', 'slug'];
    protected $useTimeStamps = true;

    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'body' => 'required'
    ];

    public function getPosts($id = null){

        if(!$id){
            return $this->findAll();
        }

        return $this->where('id', $id)
                    ->first();
    }
}