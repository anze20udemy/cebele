<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
  use Sluggable;


  use Sluggable;
  use SluggableScopeHelpers;
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title',
        'onUpdate'        => true
      ]
    ];
  }

  protected $fillable = [

    'photo_id',
    'title',
    'body',
    'image'


  ];

  public function user(){

    return $this->belongsTo('App\User');
  }



  public function photo(){

    return $this->belongsTo('App\Photo');
  }
/*  public function comments() {

    return $this->hasMany('App\Comment');
  }*/
  public function photoPlaceholder(){

    return "http://lorempixel.com/400/200/sports";
  }
  public function getTranslationsOf() {
    return 'test';
  }

  public function thumbnail() {
    $image = $this->image;
    $thumbnail = substr($image, 0, -4);
    $thumbnail = $thumbnail . '-330px.jpg';

    return $thumbnail;
  }

}
