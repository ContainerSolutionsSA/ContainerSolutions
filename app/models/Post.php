<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required|max:100'
	];

	// Don't forget to fill this array
	protected $table = 'posts';

	public function user()
	{
	    return $this->belongsTo('User');
	}

}