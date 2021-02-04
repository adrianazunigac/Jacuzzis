<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Useranswers;

class UseranswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            DB::beginTransaction();
            foreach ($request->useranswers as  $value)
            {
                    $Useranswers = new Useranswers();
                    $Useranswers->id_users = $value['id_user'];
                    $Useranswers->id_surveys = $value['id_survey'];
                    $Useranswers->id_questions = $value['id_question'];
                    $Useranswers->id_answers = $value['id_answer'];
                    $Useranswers->save();
            }

            DB::commit();

            return response()->json([
                "status" => 200,
                "message"  => "Registros guardados con exito"
            ]);

        }catch(\Exception $e){

            DB::rollback();
            return response()->json([
                "status" => 500,
                "message" => "Error al registrar los datos.".$e
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
