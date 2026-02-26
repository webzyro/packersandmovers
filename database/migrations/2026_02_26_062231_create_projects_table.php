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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('category');
            $table->decimal('budget', 10, 2);
            $table->date('published_date');
            $table->unsignedInteger('duration_days')->nullable();
            $table->string('image');
            $table->longText('description');
            $table->boolean('is_active')->default(true);
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->json('schema_markup');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
