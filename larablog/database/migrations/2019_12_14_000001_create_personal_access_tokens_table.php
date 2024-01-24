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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            // When we add $table->morphs('tokenable') to a table's schema definition,
            // Laravel will automatically create two columns:
            //  - tokenable_id: This column stores the ID of the related model. It's typically an integer but can vary depending on the primary key type of the related models.
            //  - tokenable_type: This column stores the class name of the related model. It tells Laravel which model the ID in the tokenable_id column refers to.
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
