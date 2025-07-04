<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_category', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Blog::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Category::class)->constrained()->cascadeOnDelete();
            $table->primary(['blog_id', 'category_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_category', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Blog::class);
            $table->dropForeignIdFor(\App\Models\Category::class);
        });
        Schema::dropIfExists('blog_category');
    }
};
