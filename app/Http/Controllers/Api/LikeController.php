<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Like::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Like::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Like $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        return $like;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        $like->update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        $like->delete();
    }
}