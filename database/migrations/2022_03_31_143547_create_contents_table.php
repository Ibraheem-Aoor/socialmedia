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

            $table->text('nav_link_1');
            $table->text('nav_link_2');
            $table->text('nav_link_3');

            $table->text('intro_text');
            $table->text('intro_text_paragraph');

            // proccess section headlines
            $table->text('proccess_section_headline_1');
            $table->text('proccess_section_headline_2');

            //proccess section cards
            $table->text('proccess_section_card_1_headline');
            $table->text('proccess_section_card_2_headline');
            $table->text('proccess_section_card_3_headline');

            // proccess section cards paragraphs
            $table->text('proccess_section_card_1_paragraph');
            $table->text('proccess_section_card_2_paragraph');
            $table->text('proccess_section_card_3_paragraph');



            // platforms section headlines
            $table->text('platforms_section_headline_1');
            $table->text('platforms_section_headline_2');

            // Chocies section headline
            $table->text('choices_section_headline_1');
            $table->text('choices_section_headline_2');

            // choices section cards headlines
            $table->text('choices_section_card_1_headline');
            $table->text('choices_section_card_2_headline');
            $table->text('choices_section_card_3_headline');

            // choices section cards paragraphs
            $table->text('choices_section_card_1_paragraph');
            $table->text('choices_section_card_2_paragraph');
            $table->text('choices_section_card_3_paragraph');

            

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
