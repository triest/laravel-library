<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateBooksAuthorsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('book_author', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('author_id')->unsigned()->index();
                $table->bigInteger('book_id')->unsigned()->index();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('books_authors');
        }
    }
