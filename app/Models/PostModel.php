<?php namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $allowedFields = ['date', 'title', 'subtitle', 'content', 'url', 'userid', 'attached', 'created_date', 'edited_date', 'approved_date', 'open'];
    public $posts_per_page = 15;

    public function getTotalCount($cat=null)
    {
        $builder = $this->builder();

        if($cat) {
            $count = $builder->where(['category' => $cat])->countAllResults();
        } else {
            $count = $builder->countAllResults();
        }
        return $count;
    }

    public function getPost($id = false)
    {
        return $this->asArray()
                    ->where(['id' => $id])
                    ->first();
    }

    public function getdailypost($date, $category, $id=null, $userid=null)
    {
        if($userid) {
            $post = $this->asArray()
                        ->where(['category' => $category, 'userid' => $userid, 'id' => $id, 'date' => $date])
                        ->first();
            return $post;
        } else {
            $post = $this->asArray()
                        ->where(['category' => $category, 'date' => $date])
                        ->findall();
            return $post;
        }
    } 

    public function getpostcount($category, $date, $userid)
    {
        $builder = $this->builder();

        $builder->where(['category'=>$category, 'date'=>$date, 'userid'=>$userid]);
        $count = $builder->countAllResults();

        return $count;

    }

    public function getyearlypostcount($category, $date, $userid)
    {
        $builder = $this->builder();

        $builder->where(['category'=>$category, 'userid'=>$userid]);
        $builder->like(['date'=>substr($date, 0, 4)]);
        $count = $builder->countAllResults();

        return $count;
    }

    public function getuserpost($userid)
    {
        $posts = $this->asArray()
                    ->where(['userid' => $userid])
                    ->orderBy('date', 'desc')
                    ->orderBy('id', 'desc')
                    ->paginate($this->posts_per_page, 'group1');
                    // ->findall();
        $data = [
            'posts' => $posts,
            'pager' => $this->pager
        ];

        return $data;
    }

    public function getuserpostcount($userid)
    {
        $count = $this->asArray()
                    ->where(['userid' => $userid])
                    ->orderBy('date', 'desc')
                    ->orderBy('id', 'desc')
                    ->countAllResults();
                    
        return $count;
    }

    public function getopenpost($cat)
    {
        $posts = $this->asArray()
                    ->where('category', $cat)
                    ->where("(open=1 OR open=2)")
                    ->orderBy('date', 'desc')
                    ->orderBy('id', 'desc')
                    ->paginate($this->posts_per_page, 'group1');
        $data = [
            'posts' => $posts,
            'pager' => $this->pager
        ];

        return $data;
    }

    public function getopenpostcount($cat)
    {
        $count = $this->asArray()
                    ->orWhere(['open' => '1'])
                    ->orWhere(['open' => '2'])
                    ->where(['category' => $cat])
                    ->countAllResults();
        return $count;
    }

    public function getEachPost()
    {
        foreach($this->category as $cat) {
            $result[$cat] = $this->where('category', $cat)->orderBy('id', 'desc')->first();
        }
        return $result;
    }

    public function getRecentPosts($limit)
    {
        return $this->asArray()
                    ->orderBy('date', 'desc')
                    ->orderBy('id', 'desc')
                    ->findall($limit);
    }
}