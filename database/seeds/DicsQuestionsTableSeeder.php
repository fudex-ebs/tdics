<?php

use Illuminate\Database\Seeder;

class DicsQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('dics_questions')->delete();
        $dics_questions = [
            [
                'id' => 1,
                'slug' => uniqid(),
                'content_ar' => 'content_ar',
                'content_en' => 'content_en',
                'option_d_ar' => 'option_d_ar',
                'option_d_en' => 'option_d_en',
                'option_i_ar' => 'option_i_ar',
                'option_i_en' => 'option_i_en',
                'option_c_ar' => 'option_c_ar',
                'option_c_en' => 'option_c_en',
                'option_s_ar' => 'option_s_ar',
                'option_s_en' => 'option_s_en',
                'quiz_type' => 'role_assessment',
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ],
            [
                'id' => 2,
                'slug' => uniqid(),
                'content_ar' => NULL,
                'content_en' => NULL,
                'option_d_ar' => 'option_d_ar',
                'option_d_en' => 'option_d_en',
                'option_i_ar' => 'option_i_ar',
                'option_i_en' => 'option_i_en',
                'option_c_ar' => 'option_c_ar',
                'option_c_en' => 'option_c_en',
                'option_s_ar' => 'option_s_ar',
                'option_s_en' => 'option_s_en',
                'quiz_type' => 'personal_coaching',
                'created_at' => '2013-11-29 19:51:38',
                'updated_at' => '2013-11-29 19:51:38',
            ]
        ];
        DB::table('dics_questions')->insert($dics_questions);  
    }
}
