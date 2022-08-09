<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('photos_real_estates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('real_estate_id');
            $table->string('img_uri');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('photos_real_states');
    }
};
