<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return $request;
        $page=$request->has('page')?$request->get('page'):1;
        $limit=$request->has('limit')?$request->get('limit'):10;
        $offset=($page-1)*$limit;
        //return $limit;
        return Picture::orderBy('created_at','Asc')
        ->limit($limit)
        ->offset($offset)
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Picture::create($request->all())){
            return 'New Picture added successfully!';
        }
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        return $picture;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        if($picture->update($request->all())){
            return 'Picture updated successfully!';
        }
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        if($picture->delete()){
            return 'Picture deleted successfully!';
        }
    }
}
