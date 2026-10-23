<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('crafts', function (Blueprint $table) {
            $table->string('artisan')->nullable();
            $table->string('material')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('crafts', function (Blueprint $table) {
            $table->dropColumn(['artisan', 'material']);
        });
    }
};
