<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Post;
use BootstrapComponents;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 5;
        $posts = DB::table('posts')
                    ->where('published',1)
                    ->where('show_in_menu',0)
                    ->paginate($perPage);
        $items = DB::table('posts')
                    ->where('published',1)
                    ->where('show_in_menu',0)
                    ->get();
        $items = collect($items);
        return view('pages.home', 
        [
            'posts'=>$posts,
            'pagination' => BootstrapComponents::pagination($items, $page, $perPage, '', ['arrows' => true])
        ]);
    }

    public function adminIndex(Request $request)
    {
        //;
        $page = $request->get('page', 1);
        $perPage = 10;
        $posts = DB::table('posts')->paginate($perPage);
        $items = DB::table('posts')->get();
        $items = collect($items);
        return view('pages.posts.index', 
            [
                'posts'=>$posts,
                'pagination' => BootstrapComponents::pagination($items, $page, $perPage, '', ['arrows' => true])
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post = new Post();
        $action = 'store';
        return view('pages.posts.create',['post'=>$post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data = $this->checkToggleFields($data);
            if(Post::create($data)) {
                return redirect('/admin/posts/all')->with('success','Post has been Created!');
            }
        } catch(\Exception $e) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }


    public function view($slug) {
        //$view = $request->path();
        $page = Post::where('slug',$slug)->first();
        return view('pages.posts.page',['page'=>$page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('pages.posts.create',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $data = $this->checkToggleFields($data);
        $post->update($data);
        return redirect('/admin/posts/'.$post->id.'/edit')->with('success','Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function search(Request $request) {
        $term = $request->get('term');
        $posts = DB::table('posts')
                    ->where('title', 'LIKE', '%'.$term.'%')
                    ->orWhere('content','LIKE' ,'%'.$term.'%')
                    ->orWhere('slug','LIKE' ,'%'.$term.'%')
                    ->orWhere('author','LIKE' ,'%'.$term.'%')
                    ->get();
        $page = $request->get('page', 1);
        $perPage = 5;
        $items = collect($posts);
        return view('pages.home', 
        [
            'posts'=>$posts,
            'pagination' => BootstrapComponents::pagination($items, $page, $perPage, '', ['arrows' => true])
        ]);
    }

    private function checkToggleFields($data) {
        if(isset($data['page_only'])) {
            $data['page_only'] = 1;
        } else {
            $data['page_only'] = 0;
        }
        if(isset($data['published'])) {
            $data['published'] = 1;
        } else {
            $data['published'] = 0;
        }
        if(isset($data['show_in_menu'])) {
            $data['show_in_menu'] = 1;
        } else {
            $data['show_in_menu'] = 0;
        }
        if(!isset($data['content'])) {
            $data['content'] = '';                
        } 
        return $data;
    }
}
