<?php

class MoviesController extends BaseController{

  protected $movie;

  public function __construct(Movie $movie){
    $this->movie = $movie;
  }

  public function index(){
    return View::make("movies.index");
  }

  public function store(){
    $input = Input::all();
    $movie = $this->movie;
    if($movie->fill($input)->isValid()){
      $movie->save();
    	$response['movies'] = array();
      $response['total'] = 1;
      array_push($response["movies"], $movie->toArray());
  	} else {
    	$response["success"] = 0;
      $response['errors'] = $movie->errors;
    }
    return Response::json($response, 200, [], JSON_NUMERIC_CHECK);
  }

  public function update(){
    $input = Input::all();
    $movie = $this->movie->find($input['id']);
    if($movie != null){
      //dd($input);
      if($movie->fill($input)->isValid()){
        $movie->save();
      	$response['movies'] = array();
        $response['total'] = 1;
        array_push($response["movies"], $movie->toArray());
      }else {
      	$response["success"] = 0;
        $response['errors'] = $movie->errors;
      }
    }
    return Response::json($response, 200, [], JSON_NUMERIC_CHECK);
  }

  public function destroy(){
    $input = Input::all();
    $movie = $this->movie->find($input['id']);
    if($movie->delete()){
    	$response['movies'] = array();
      array_push($response["movies"], $input);
      return Response::json($response, 200, [], JSON_NUMERIC_CHECK);
    }
  }

  public function getMovies(){
    $movies = $this->movie->get();
    if ($movies->count() > 0) {
      //$response = array();
  			$response['movies'] = array();
        $response['total'] = $movies->count();
    		foreach ($movies as $movie) {
    			array_push($response["movies"], $movie->toArray());
  			}
		} else {
  			$response["success"] = 0;
  			$response["message"] = trans("messages.msg_noElements");
    }
    	return Response::json($response, 200, [], JSON_NUMERIC_CHECK);
  }

}
