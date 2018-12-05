<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table = "posts";
    protected $fillable = ['title', 'author', 'content','slug','page_only','show_in_menu','published'];

    public static function getMenu() {
        return DB::table('posts')
            ->where('published', 1)
            ->Where('show_in_menu',1)
            ->get();
    }
}
