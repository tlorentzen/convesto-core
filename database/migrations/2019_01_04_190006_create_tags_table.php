<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned()->default(0);
            $table->bigInteger('parent_id')->unsigned();
            $table->bigInteger('department_id')->unsigned()->default(0);
            $table->string('name');
            $table->string('color', 30)->default('#FFFFFF');
            $table->jsonb('data');
            $table->timestamps();

            $table->unique(['company_id', 'parent_id', 'name']);
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
