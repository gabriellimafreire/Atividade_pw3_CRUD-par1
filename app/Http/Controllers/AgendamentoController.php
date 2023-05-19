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
}

