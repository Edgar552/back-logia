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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->string('excerpt')->nullable();

            $table->string('event_place');
            $table->date('event_date');
            $table->time('event_time');


            $table->longText('content');

            $table->string('cover')->nullable();

            $table->boolean('published')->default(false);

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
