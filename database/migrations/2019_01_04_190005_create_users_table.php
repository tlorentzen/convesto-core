<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable()->default(null);
            $table->string('title')->nullable()->default(null);;
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'manager', 'employee', 'viewer'])->default('viewer');
            $table->text('bio');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('internal')->default(false);
            $table->jsonb('options');
            $table->bigInteger('resource_id')->unsigned()->default(null);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('resource_id')
                ->references('id')
                ->on('resources')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}