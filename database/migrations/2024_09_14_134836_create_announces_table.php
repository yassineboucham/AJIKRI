<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->id();
            // Reference 'type_id' from 'types' table, not 'id'
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('types')->onDelete('cascade');

            // Reference 'categorie_id' from 'categories' table
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('categorie_id')->on('categories')->onDelete('cascade');

            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->text('devis')->nullable();
            $table->string('unit_time');
            $table->integer('minimum_time');
            $table->integer('max_time');
            $table->string('city');
            $table->string('sector');
            $table->boolean('availability');
            $table->text('image_urls')->nullable();

            // Reference 'user_id' from 'users' table
            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announces');
    }
};
