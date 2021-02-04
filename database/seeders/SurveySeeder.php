<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Surveys;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Surveys();
        $data->name = "Encuesta de Satisfaccion";
        $data->state="1";
        $data->instructions = "Debe seleccionar la respuesta que corresponda";
        $data->save();

        $data = new Surveys();
        $data->name = "Datos Generales";
        $data->state="1";
        $data->instructions = "La encuesta esta diseñada para no tomar más de 15 minutos";
        $data->save();
    }
}
