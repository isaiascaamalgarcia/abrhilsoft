<?php

class Movie extends BaseModel{

  protected $table = "movies";
  public $fillable = ["name", "gender", "year", "actors", "country"];

  public static $rules = [
    "name" => "required|string|max:100",
    "gender" => "required|string|max:100",
    "year" => "numeric",
    "actors" => "string|max:200",
    "country" => "string|max:50"
  ];
}
