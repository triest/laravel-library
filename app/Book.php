<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model
    {
        //
        protected $table = "books";

        public function author()
        {
            //return $this->belongsTo('App\Author');
            return $this->belongsToMany('App\Author', 'book_author', 'book_id',
                    'author_id');
        }


    }
