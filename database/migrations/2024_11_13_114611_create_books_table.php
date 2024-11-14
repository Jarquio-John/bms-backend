<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Auto-incremented primary key
            $table->string('title'); // String field for the title
            $table->string('author'); // String field for the author
            $table->integer('published_year'); // Integer field for the published year
            $table->string('genre'); // String field for the genre
            $table->text('description'); // Text field for the description
            $table->timestamps(); // Adds created_at and updated_at timestamps
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
