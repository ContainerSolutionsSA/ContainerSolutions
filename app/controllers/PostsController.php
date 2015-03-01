<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = new Post();
		return $this->savePost($post);
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		return $this->savePost($post);
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

	public function savePost(Post $post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			Log::error('Failed to save post!', Input::all());
			Session::flash('errorMessage', "Not saved");
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$post->name = Input::get('name');
		$post->height  = Input::get('height');
		$post->width  = Input::get('width');
		$post->length  = Input::get('length');
		$post->windows  = Input::get('windows');
		$post->ac  = Input::get('ac');
		$post->bathroom  = Input::get('bathroom');
		$post->kitchen   = Input::get('kitchen');
		$post->security_lights  = Input::get('security_lights');
		$post->user_id = Auth::id();
		$post->save();

		Session::flash('successMessage', "Post saved successfully");
		return Redirect::action('PostsController@show', $post->id);
	}

	// public function post_upload(){

	// 	$input = Input::all();
	// 	$rules = array(
	// 	    'file' => 'image|max:3000',
	// 	);

	// 	$validation = Validator::make($input, $rules);

	// 	if ($validation->fails())
	// 	{
	// 		return Response::make($validation->errors->first(), 400);
	// 	}

	// 	$file = Input::file('file');

 //        $extension = File::extension($file['name']);
 //        $directory = path('public').'uploads/'.sha1(time());
 //        $filename = sha1(time().time()).".{$extension}";

 //        $upload_success = Input::upload('file', $directory, $filename);

 //        if( $upload_success ) {
 //        	return Response::json('success', 200);
 //        } else {
 //        	return Response::json('error', 400);
 //        }
	// }
}
