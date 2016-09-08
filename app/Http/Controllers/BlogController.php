<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 03.08.2016
 * Time: 18:39
 */

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;


class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Отзывы о нас',
            'longtitle' => 'Отзывы о нас',
            'count' => Post::count(),
            'posts' => Post::latest('published_at')->paginate(10)
        ];
        return View::make('pages.blog', $data);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Http\RedirectResponse
     */
    public function store(Http\Request $request, Post $post)
    {


        $this->validate($request, [
            'name' => 'min:4|max:50',
            'email' => 'email'
        ]);


        $post->published_at = date("Y-m-d H:i:s");
        $post->subject = $request->subject;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->save();

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('blog');
    }
}