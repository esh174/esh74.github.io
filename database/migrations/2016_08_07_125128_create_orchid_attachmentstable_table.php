<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrchidAttachmentstableTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'attachments', callback: function (Blueprint $table) {
            $table->increments(column: 'id');
            $table->text(column: 'name');
            $table->text(column: 'original_name');
            $table->string(column: 'mime');
            $table->string(column: 'extension')->nullable();
            $table->bigInteger(column: 'size')->default(0);
            $table->integer(column: 'sort')->default(0);
            $table->text(column: 'path');
            $table->text(column: 'description')->nullable();
            $table->text(column: 'alt')->nullable();
            $table->text(column: 'hash')->nullable();
            $table->string(column: 'disk')->default('public');
            $table->uuid(column: 'user_id')->nullable();
            $table->string(column: 'group')->nullable();
            $table->timestamps();
        });

        Schema::create(table: 'attachmentable', callback: function (Blueprint $table) {
            $table->increments(column: 'id');
            $table->uuidMorphs(name: 'attachmentable');
            $table->unsignedInteger(column: 'attachment_id');
            $table->foreign(columns: 'attachment_id')
                ->references('id')
                ->on('attachments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop(table: 'attachmentable');
        Schema::drop(table: 'attachments');
    }
}
