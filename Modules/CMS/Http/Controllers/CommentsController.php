<?php

namespace Modules\CMS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CMS\Entities\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($page_id) 
    {
        $comments = new Comment();
        return $comments->getComments($page_id);
        //return view('cms::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('cms::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {        
        $data = $request->all();
        if(Comment::create($data)) {
            $data = (object)$data;
            $comments = new Comment();
            return $comments->getComments($data->post_id);
        }
        return [];
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('cms::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cms::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
