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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
            $table->string("author_bio")->nullable();
            $table->string("username")->nullable();

            // Author's social media links
            $table->string("author_website")->nullable();
            $table->string("author_facebook")->nullable();
            $table->string("author_instagram")->nullable();
            $table->string("author_linkedin")->nullable();
            $table->string("author_youtube")->nullable();
            $table->string("author_x")->nullable();
            $table->string("author_telegram")->nullable();
            $table->string("author_whatsapp",20)->nullable();
            $table->string("author_discord")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
