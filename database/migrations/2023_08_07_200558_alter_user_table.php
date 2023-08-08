<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('num_empleado');
            $table->string('phone');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropColumn('num_empleado');
        $table->dropColumn('phone');
    }
};
