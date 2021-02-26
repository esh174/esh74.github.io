<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(table: 'messages', callback: function (Blueprint $table) {
            $table->uuid(column: 'id')->primary();
            $table->uuid(column: 'sender_id');
            $table->uuid(column: 'receiver_id');
            $table->longText(column: 'text');
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
        Schema::dropIfExists(table: 'messages');
    }
}
