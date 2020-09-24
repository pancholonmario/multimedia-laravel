<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    //
    use Sluggable;

    //Para que laravel acepte datos de manera masiva hacemos lo siguiente:
    protected $fillable = [
        'title', 'body', 'iframe', 'image', 'user_id'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute(){

        //substr() funcion para retornar
        return substr($this->body, 0, 140);

    }

    public function getGetImageAttribute(){

       if($this->image)

       return url("storage/$this->image");

    }

}
