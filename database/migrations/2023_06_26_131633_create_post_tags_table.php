<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();


//            POST_FK
            $table->foreignId('post_id')
                ->index()
                ->constrained('posts')
                ->references('id');

//            TAG_FK
            $table->foreignId('tag_id')
                ->index()
                ->constrained('tags')
                ->references('id');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
