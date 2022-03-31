<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->text('intro_text');
            $table->text('intro_text_paragraph');

            $table->text('proccess_section_headline_1');
            $table->text('proccess_section_headline_2');

            $table->text('proccess_section_card_1_headline');
            $table->text('proccess_section_card_2_headline');
            $table->text('proccess_section_card_3_headline');

            $table->text('proccess_section_card_1_paragraph');
            $table->text('proccess_section_card_2_paragraph');
            $table->text('proccess_section_card_3_paragraph');

            $table->text('categories_section_card_1_headline');
            $table->text('categories_section_card_2_headline');
            $table->text('categories_section_card_3_headline');

            $table->text('categories_section_card_1_paragraph');
            $table->text('categories_section_card_2_paragraph');
            $table->text('categories_section_card_3_paragraph');

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
        Schema::dropIfExists('contents');
    }
}
