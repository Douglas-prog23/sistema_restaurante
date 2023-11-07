<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users=User::orderBy('id','desc')->paginate();
        $users=User::paginate();
        return view('auth.userindex', compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=Role::all();
        return view('auth.registertwo',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        $user=User::create($request->all());
        return redirect()->route('usuario.index')
            ->with('success', 'Usuario Creado Exitosamente.');
    }
    // public function store( StoreCurso $request){
    //     $curso=Curso::create($request->all());
    //     return redirect()->route('cursos.show', $curso);
    // }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles=Role::all();
        return view('auth.edituser',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('usuario.index')
            ->with('success', 'Usuario Actualizado Exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        //
    }
}
