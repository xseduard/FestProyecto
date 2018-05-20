<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use App\Role;
use Flash;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(15);
        return view('usuarios.index')->with(['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = [
            'nombres'   => $request->nombres,
            'apellidos'   => $request->apellidos,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
        ];

        

        $user->save();

        Flash::success('Usuario registrado correctamente.');

        return redirect(route('usuarios.index'));
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
        
        try {
            $usuario =  User::find($id);
        } catch (Exception $e) { /*nothing*/ }

        if (empty($usuario)) {
            Flash::error('Usuario No se encuentra registrado.');

            return redirect(route('usuarios.index'));
        }
        
        return view('usuarios.edit')->with(['usuario' => $usuario]);
    }

    

    public function update(UpdateUserRequest $request, $id)
    {

        
        try {
            $user = User::find($id);
        } catch (Exception $e) { /*nothing*/ }

        if (empty($user)) {
            Flash::error('Usuario No se encuentra registrado.');

            return redirect(route('usuarios.index'));
        }
        
        $input = $request->only('nombres', 'apellidos', 'cedula','role', 'email');

        if (!empty($request->password)) {
            $input = $request->only('nombres', 'apellidos', 'cedula','role', 'email');
            $input['password'] = bcrypt($request->password);
        }

       $user->update($input);
        
        
        Flash::success('Usuario actualizado correctamente.');

        return redirect(route('usuarios.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $user = User::find($id);
        } catch (Exception $e) { /*nothing*/ }

        if (empty($user)) {
            Flash::error('Usuario No se encuentra registrado.');

            return redirect(route('usuarios.index'));
        }
        
        $user->delete();

        Flash::success('Usuario eliminado correctamente.');

        return redirect(route('usuarios.index'));
    }

}
