<?php

namespace Modules\CMS\Entities;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table = "posts";
    protected $fillable = ['title', 'author', 'content','slug','page_only','show_in_menu','published'];

    //Stores Entities Parent Entities Primary Keys
    protected $parentKeysArray = [];

    public function children() {
        return $this->belongsToMany(Post::class,'post_childrens','parent_id','child_id');
    }

    public function parents() {
        return $this->belongsToMany(Post::class,'post_childrens','child_id','parent_id');
    }

    public function update(array $attributes = [], array $options = []) {
        if(isset($attributes['children'])) {
            $this->parents()->sync($attributes['children']);
        }
        parent::update($attributes, $options);
    }

    public function getParentKeysArray() {
        if($this->parentKeysArray) {
            return $this->parentKeysArray;
        }
        $this->parentKeysArray = $this->parents()->pluck('posts.id')->toArray();
        return $this->parentKeysArray;
    }

    public static function getMenu() {
        $posts =  self::where('published', 1)
            ->Where('show_in_menu',1)
            ->get();
        return $posts;
    }
}
