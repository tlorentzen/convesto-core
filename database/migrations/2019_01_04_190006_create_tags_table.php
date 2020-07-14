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
            $table->id();
            $table->string('name');
            $table->string('color', 10)->default('#ffffff');
            $table->bigInteger('organization_id')->unsigned();
            $table->bigInteger('group_id')->unsigned()->default(0);
            $table->bigInteger('parent')->unsigned()->default(0);
            $table->timestamps();

            $table->index('name');
            $table->unique(['organization_id', 'group_id', 'parent', 'name'], 'unique_tag_index');

            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations');
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
