<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\support\facade\DB;
use app\Request\createValidationRequest;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $data =Blogs::all();
        // dd($data->all());
        return view ('index',['index'=>$data]);
       

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
        $request ->validate([
            'author' => 'required',
            'title' => 'required',
           'summary' => 'required',
            'context' => 'required',
           'published_at' => 'required',
        ]);
        
        $author = $request ->author;
        $title = $request ->title;
        $summary = $request -> summary;
        $context = $request -> context;
        $published_at = $request -> published_at;

  
        $Blogs = new Blogs();
        $Blogs-> author  = $author;
        $Blogs-> title = $title;
        $Blogs-> summary = $summary;
        $Blogs-> context= $context;
        $Blogs-> published_at= $published_at;

       $Blogs-> save(); 
       return redirect()->route('blogs.index');
        
    }
    
    public function show(string $id)
    {
       
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
