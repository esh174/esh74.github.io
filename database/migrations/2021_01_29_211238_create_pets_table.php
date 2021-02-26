<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(table: 'pets', callback:  function (Blueprint $table) {
            $table->uuid(column: 'id')->primary();
            $table->uuid(column: 'owner_id');
            $table->string(column: 'name');
            $table->uuid(column: 'category_id');
            $table->json(column: 'fieldset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'pets');
    }
}
