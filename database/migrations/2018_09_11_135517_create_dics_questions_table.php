<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDicsQuestionsTable extends Migration
{       
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dics_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('content_ar')->nullable();
            $table->string('content_en')->nullable();
            $table->string('option_d_ar');
            $table->string('option_d_en');
            $table->string('option_i_ar');
            $table->string('option_i_en');
            $table->string('option_s_ar');
            $table->string('option_s_en');
            $table->string('option_c_ar');
            $table->string('option_c_en');
            $table->enum('quiz_type', ['role_assessment', 'personal_coaching']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dics_questions');
    }
}
