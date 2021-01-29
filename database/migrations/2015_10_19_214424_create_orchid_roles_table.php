<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrchidRolesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'roles', callback: function (Blueprint $table) {
            $table->uuid(column: 'id')->primary();
            $table->string(column: 'slug')->unique();
            $table->string(column: 'name');
            $table->jsonb(column: 'permissions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'roles');
    }
}
