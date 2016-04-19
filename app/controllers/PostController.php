<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$posts = Post::all();  return View::make('posts.index', array('posts' => $posts));->with('posts', $posts);
		

		$posts = Post::with('user');
		$posts = Post::orderBy('created_at', 'DESC')->paginate(10);
		return View::make('posts.index', compact('posts'));

		
        //return View::make('posts.index')->with('posts', $posts);

		

	}

	public function listposthome()
	{
		# code...
		$posts = Post::all();
        return View::make('home.home', array('posts' => $posts));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('posts.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	 /*$post = new Post();
		 $post->body = Input::get('body');
        $post->privacy = Input::get('privacy')
        $post->save();
		*/
	public function store()
	{
		
		

			$post = new Post;
            $post->body       = Input::get('body');
            $post->privacy    = Input::get('privacy');
           	$post['user_id'] = Auth::user()->id;
            $post->save();

           
            return Redirect::to('posts');

        
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
