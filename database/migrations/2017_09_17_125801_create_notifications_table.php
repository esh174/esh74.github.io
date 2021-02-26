<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        if (! Schema::hasTable(table: 'notifications')) {
            Schema::create(table: 'notifications', callback: function (Blueprint $table) {
                $table->uuid(column: 'id')->primary();
                $table->string(column: 'type');
                $table->morphs(name: 'notifiable');
                $table->text(column: 'data');
                $table->timestamp(column: 'read_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'notifications');
    }
}
