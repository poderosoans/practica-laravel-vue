<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Tremos todos los registros
        $tasks = Task::orderBy('id','DESC')->paginate(4);

        return [
                'pagination' => [
                    'total'          => $tasks->total(),
                    'current_page'   => $tasks->currentPage(),
                    'per_page'       => $tasks->perPage(),
                    'last_page'      => $tasks->lastPage(),
                    'from'           => $tasks->firstItem(),
                    'to'             => $tasks->lastItem(),
                ],
                'tasks' => $tasks
                ];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Lógica para guardar datos
        $this->validate($request, [
                'keep' => 'required'
            ]);
        // Trae pero solo guarda lo que se tiene registrado en el modelo.
        Task::create($request->all());

        return;
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
        // Lógica para la actualización
        $this->validate($request, [
            'keep' => 'required',
        ]);

        Task::find($id)->update($request->all());
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
