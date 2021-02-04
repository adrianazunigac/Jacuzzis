<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = new User;
        $Users =$Users->select('id', 'name', 'email', 'document')
        ->where('id','!=','0')
        ->orderBy('id','DESC')->get();

        return view('usuarios.usuarioList')->with('Users',$Users)->with('title','Usuarios Listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.usuarioForm')->with('title','Usuarios Crear');
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

            $nomfile = "";

             if ($request->file('imagen')){

                $image = $request->file('imagen');
                $extension = $image->getClientOriginalExtension();
                $nomfile = time().'.'.$extension;
                $image->move(public_path('dist/img/usuarios'),$nomfile);

             }

            $Users = new User();
            $Users->name = $request->input('nombre_usuario');
            $Users->email = $request->input('email');
            $Users->document = $request->input('documento_usuario');
            $Users->photo = $nomfile;
            $Users->password = bcrypt($request->input('contrasena_usuario'));
            $Users->created_at = Carbon::now();
            $Users->save();

            return redirect()->route('usuarios.index')->with(['message'=>'Registro creado satisfactoriamente']);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al crear el Usuario'.$e);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::select('id','name as nombre','email','password','photo as ruta_img','document')->where('id', '=',$id)->first();
        return view('usuarios.usuarioForm')->with('user',$user)->with('title','Usuarios Editar');
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
        try {

            if ($request->input('tipo') == 1) {

                $nomfile = "";
                if ($request->file('imagen')){

                    $image = $request->file('imagen');
                    $extension = $image->getClientOriginalExtension();
                    $nomfile = time().'.'.$extension;
                    $image->move(public_path('dist/img/usuarios'),$nomfile);

                 }

                $Users = new User();
                $Users = $Users->where('id', $id)->firstOrfail();
                $Users->name = $request->input('nombre_usuario');
                $Users->email = $request->input('email');
                $Users->document = $request->input('documento_usuario');
                if(!empty($nomfile)){
                    $Users->photo = $nomfile;
                }
                if(!empty($request->input('contrasena_usuario'))){
                    $Users->password = bcrypt($request->input('contrasena_usuario'));
                }
                $Users->updated_at = Carbon::now();
                $Users->save();

                return redirect()->route('usuarios.index')->with(['message'=>'Registro editado satisfactoriamente']);

            } else {

                $Users = new User();
                $Users = $Users->where('id', $id)->firstOrfail();
                $Users->state = $request->input('estado');
                $Users->updated_at = Carbon::now();
                $Users->save();

                return redirect()->route('usuarios.index')->with(['message'=>'Cambio de estado exitoso!']);

            }

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al editar el usuario'.$e);
        }
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

    public function forgot() {
        $credentials = request()->validate(['email' => 'required|email']);

        Password::sendResetLink($credentials);

        return response()->json([
            'status' => 200,
            'data' => 'Correo de recuperacion enviado.'
        ]);

    }
}
