<?php namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $allowedFields = ['author', 'title', 'content'];
    public $posts_per_page = 15;

    public function getCategory($author)
    {
        return $this->asArray()
                    ->where(['author' => $author])
                    ->first();
    }

}