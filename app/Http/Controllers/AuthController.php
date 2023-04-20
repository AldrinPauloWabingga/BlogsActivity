<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $authors = Blogs::table('authors')->get();
        // return view('createpost')->with('authors',$authors);

        return view ('Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'author' => 'required',
            'title' => 'required',
           'summary' => 'required',
            'context' => 'required',
           'publish_at' => 'required',
            ]);
            
        $Blogs = new Blogs();
        $Blogs->author = $request->author;
        $Blogs->title = $request->title;
        $Blogs->summary = $request->summary;
        $Blogs->context = $request->context;
        $Blogs->published_at = $request->published_at;

        // Blogs::create($request->validate([
        //     // 'author' => 'required',
        //     // 'title' => 'required',
        //     // 'summary' => 'required',
        //     // 'context' => 'required',
        //     // 'publish_at' => 'required',
        // ]))

        
        $Blogs->save();
        
        
        }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}