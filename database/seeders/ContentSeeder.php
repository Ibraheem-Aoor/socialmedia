<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'nav_link_1' => 'Home',
            'nav_link_2' => 'Platforms',
            'nav_link_3' => 'Steps',

            'intro_text' => 'The Revolutionary Website That Helps To increase your Crowd',
            'intro_text_paragraph' => 'Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem',

            'proccess_section_headline_1' => 'How It Works' ,
            'proccess_section_headline_2' => '3 Easy Steps',

            'proccess_section_card_1_headline' => 'Choose Your App',
            'proccess_section_card_2_headline' => 'Choose One Offer',
            'proccess_section_card_3_headline' => 'Enjoy The Features',

            'proccess_section_card_1_paragraph' => 'Choose One of social medai apps: Instagram , twitter , youtube , and tiktok!',
            'proccess_section_card_2_paragraph' => 'We Offer multiple easy tasks , just complete Only One Task and you\'re ready to move on!',
            'proccess_section_card_3_paragraph' => 'After Successfully Completing The Task , Your Order is Registerd!',

            'platforms_section_headline_1' => 'Paltforms',
            'platforms_section_headline_2' => 'Choose Your favourate',


            'choices_section_headline_1' => 'Categories',
            'choices_section_headline_2' => 'What exactly you want to increase?',

            'choices_section_card_1_headline' => 'Likes',
            'choices_section_card_2_headline' => 'Followers',
            'choices_section_card_3_headline' => 'Veiws',

            'choices_section_card_1_paragraph' => 'Increase Liskes on your posts up to 1000!',
            'choices_section_card_2_paragraph' => 'Increase Followers on your posts up to 1000!',
            'choices_section_card_3_paragraph' => 'Increase Views on your posts up to 1000!',

        ]);
    }
}
