<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function PersonasGuardar(Request $request)
    {
        Persona::insert(
            [
                'carnet' => $request->carnet,
                'nombres' => $request->nombres,
                'apellido_paterno' => $request->apellido_paterno,
                'apellido_materno' => $request->apellido_materno,
                'correo' => $request->correo,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'domicilio' => $request->domicilio,
                'telefono' => $request->telefono,
                'celular' => $request->celular
            ]       
        );

        return redirect()->route('admin.dashboard');
    }

    public function PersonasEditar(Request $request, $id)
    {
        // Validación para asegurarse de que 'carnet' no sea nulo
        $validated = $request->validate([
            'carnet' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'correo' => 'required|email',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'celular' => 'required|string|max:255',
        ]);

        $persona = Persona::find($id);
        
        // Actualizar los datos de la persona
        $persona->update([
            'carnet' => $request->carnet,
            'nombres' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'correo' => $request->correo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
        ]);

        return redirect()->route('admin.dashboard');
    }


    public function PersonasEliminar($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('admin.dashboard');
    }
    public function actualizarPersona(Request $request, $id)
    {
        // Validar los datos
        $validated = $request->validate([
            'carnet' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'correo' => 'required|email',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'celular' => 'required|string|max:255',
        ]);

        // Encontrar la persona y actualizar
        $persona = Persona::find($id);
        $persona->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Persona actualizada correctamente');
    }

}
