<?php

namespace Modules\CMS\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table ='comments';

    protected $fillable = ['post_id','user_id','username','comment'];

    public function getComments($page_id) {
        $comments = $this->where('post_id',$page_id)->get();
        return $comments;
    }
}
