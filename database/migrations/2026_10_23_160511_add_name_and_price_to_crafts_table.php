<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('crafts', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->decimal('price', 12, 2)->default(0)->after('material');
        });
    }

    public function down(): void
    {
        Schema::table('crafts', function (Blueprint $table) {
            $table->dropColumn(['name', 'price']);
        });
    }
};
