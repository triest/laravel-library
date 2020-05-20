<?php

    namespace App\Http\Controllers;

    use App\Author;
    use Illuminate\Http\Request;

    class IndexContreller extends Controller
    {
        //

        public function authors()
        {
            return view('author_create');
        }

        public function store_author(Request $request)
        {
            $validatedData = $request->validate([
                    'last_name' => 'required',
                    'first_name' => 'required',
            ]);

            $author = new Author();
            $author->first_name = $request->first_name;
            $author->last_name = $request->last_name;
            $author->save();
            return redirect('/authors');
        }


    }
