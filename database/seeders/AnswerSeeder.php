<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answers;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Answers();
        $data->name = "Totalmente insastisfecho";
        $data->id_questions = 1;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Satisfecho";
        $data->id_questions = 1;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Muy satisfecho";
        $data->id_questions = 1;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Muy baja calidad";
        $data->id_questions = 2;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Normal";
        $data->id_questions = 2;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Buena calidad";
        $data->id_questions = 2;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Peor";
        $data->id_questions = 3;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Igual";
        $data->id_questions = 3;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Mejor";
        $data->id_questions = 3;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Pagina web";
        $data->id_questions = 4;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Oficinas (Presencial)";
        $data->id_questions = 4;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Un amigo";
        $data->id_questions = 4;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Si";
        $data->id_questions = 5;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "No";
        $data->id_questions = 5;
        $data->state = 1;
        $data->save();

        $data = new Answers();
        $data->name = "Nose";
        $data->id_questions = 5;
        $data->state = 1;
        $data->save();
    }
}
