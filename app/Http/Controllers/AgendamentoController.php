<?php

namespace App\Http\Controllers;

use App\Models\agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
        public function home()
        {
            return view(view: 'index');
        }

        public function create(Request $request)
        {
            $agendamentos = agendamento::query()->create($request->all());
            return view("index");
        }

        public function consulta(Request $request)
        {
            $agendamentos = Agendamento::all();
            return view("consultar",['agendamentos' => $agendamentos]);
        }

        public function excluir($id)   
        {
            Agendamento::where('id', $id)->delete();
            return redirect("consultar");
        }

        public function editar($id)   
        {
            $agendamento = Agendamento::all()->where('id', $id)->first();
            return view("editar",['agendamento' => $agendamento]);
        }

        public function atualizar(Request $request, $id)   
        {
            $agendamento = Agendamento::query()->findOrFail($id);
            $agendamento->update($request->all());
            return redirect("consultar");
        }
    
}

