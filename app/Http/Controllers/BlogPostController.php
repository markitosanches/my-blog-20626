<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);

        return redirect('blog/'.$newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return  view ('blog.show', ['post'=>$blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['post' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect(route('blog.show', $blogPost->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect(route('blog'));
    }

    public function queries(){
       //Select * from table
       //$blog = BlogPost::all();

       // select title from table;
        // $blog = BlogPost::select('title')
        // ->get();

     // select * from table WHERE  = ?;
        // $blog = BlogPost::select()
        // ->WHERE('user_id', '=',  3)
        // ->get();


     // select * from table WHERE  = ? AND = ?;
        // $blog = BlogPost::select()
        // ->where('user_id', '=',  3)
        // ->where('id', '=', 4)
        // ->get();

    //  select * from table WHERE  = ? OR = ?;
        // $blog = BlogPost::select()  
        // ->where('user_id', '=', 3)
        // ->orWhere('user_id', '=' ,4)
        // ->get();

    //  select * from table ORDER BY column;
    //     $blog = BlogPost::select('title')  
    //     ->orderBy('title', 'DESC')
    //     ->get();

    //  select * from table INNER JOIN table On pk = fk;
        // $blog = BlogPost::select('title', 'name')
        // ->join('users', 'blog_posts.user_id', '=', 'users.id')
        // ->orderby('name')
        // ->get();    

    //  select * from table LEFT OUTER JOIN table On pk = fk;
        // $blog = BlogPost::select('title', 'name')
        // ->rightJoin('users', 'blog_posts.user_id', '=', 'users.id')
        // ->orderby('name')
        // ->get(); 

    //  Select COUNT(*) FROM Table; // count / sum / max / min / avg
        //$blog = BlogPost::count('id');

        //$blog = BlogPost::where('user_id', '=', 3)->count('id');

// DB Requette brute

        // $blog = BlogPost::select(DB::raw('count(*) as countblog, user_id'))
        // ->groupby('user_id')
        // ->get();

        //select * from table wehre id = ?
        $blog = BlogPost::find(1);
        $user = User::all();


       return view('blog.blog-query', ['blog'=> $blog, 'users' => $user]);
    }
}
