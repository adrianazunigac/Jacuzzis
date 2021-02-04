<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Useranswers;

class UseranswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Useranswers();
        $data->id_users = 1;
        $data->id_surveys = 1;
        $data->id_questions = 1;
        $data->id_answers = 2;
        $data->save();

        $data = new Useranswers();
        $data->id_users = 1;
        $data->id_surveys = 1;
        $data->id_questions = 2;
        $data->id_answers = 6;
        $data->save();

        $data = new Useranswers();
        $data->id_users = 1;
        $data->id_surveys = 1;
        $data->id_questions = 3;
        $data->id_answers = 8;
        $data->save();
    }
}
