<?php

namespace App\Http\Controllers\Api;

use App\Models\Estudiante;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstudianteController extends Controller  
{
    public function index()
    {
        $estudiante = Estudiante::all();  
        return response()->json($estudiante, 200);  
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'lenguaje' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'status' => 404,
                'errors' => $validator->errors()->all()
            ];
            return response()->json($data, 404);
        }

      
        $estudiante = Estudiante::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo, // Se usa 'correo' en lugar de 'email'
            'telefono' => $request->telefono,
            'lenguaje' => $request->lenguaje
        ]);

        if ($estudiante) {
            $data = [
                'status' => 404,
                'message' => 'No se pudo crear el estudiante'
            ];
            return response()->json($data, 404);
        }

        $data = [
            'status' => 201,
            'message' => 'Estudiante creado correctamente',
            'estudiante' => $estudiante
        ];
        return response()->json($data, 201);
    }

    public function show($id)
    {
        // Aquí puedes agregar el código para mostrar un estudiante por su ID
    }
}
