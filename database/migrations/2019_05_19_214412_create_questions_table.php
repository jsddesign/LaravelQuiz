<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('questions')){
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('questionqategory', 3);
            $table->longText('question');
            $table->longText('answera');
            $table->longText('answerb');
            $table->longText('answerc');
            $table->longText('answerd');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
