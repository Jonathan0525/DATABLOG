<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;





class Article extends Model 
{

    use Sluggable;


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public static function findBySlugOrFail($slug, $columns = array('*') )      
    {          
        if ( !is_null($slug = static::whereSlug($slug)->first($columns))) 
        {  return $slug; }

        throw new ModelNotFoundException;      
    }

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function category() 
    {

    	return $this->belongsTo('App\Category');

    }

    public function user() 
    {

    	return $this->belongsTo('App\User');

    }

    public function images()
    {

    	return $this->hasMany('App\Imagen');

    }

    public function tags () {

        return $this->belongsToMany('App\Tag');
    }

    public function scopeSearchArticle($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }

    public function scopeSearchIdUser($query, $user_id)
    {
        return $query->where('user_id', '=', $user_id);
    }



}


     

