<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questions;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Questions();
        $data->name = "A grandes rasgos, ¿ Cuán satisfecho está con los servicios de la empresa?";
        $data->id_surveys = 1;
        $data->state = 1;
        $data->save();

        $data = new Questions();
        $data->name = "Elige entre las opciones de calidad, su opinion frente a los productos de la empresa";
        $data->id_surveys = 1;
        $data->state="1";
        $data->save();

        $data = new Questions();
        $data->name = "Comparado con otros productos, los productos de nuestra empresa son:";
        $data->id_surveys = 1;
        $data->state="1";
        $data->save();

        $data = new Questions();
        $data->name = "¿Cómo conoció a Jacuzzis.com?";
        $data->id_surveys = 2;
        $data->state="1";
        $data->save();

        $data = new Questions();
        $data->name = "¿Conoce nuestros servicios?";
        $data->id_surveys = 2;
        $data->state="1";
        $data->save();

    }
}
