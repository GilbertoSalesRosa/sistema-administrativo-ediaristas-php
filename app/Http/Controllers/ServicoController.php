<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicoRequest;
use App\Models\Servico;

class ServicoController extends Controller
{
    /**
     * lista os serviços
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        //$servicos = Servico::paginate(1);
        $servicos = Servico::paginate(10);
        return view('servicos.index')->with('servicos', $servicos);
    }
    /**
     * Mostra o form vazio 
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('servicos.create');
    }
    /** 
     * Cria um novo registro
     * 
     * @param \App\Http\Requests\ServicoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');
        
        Servico::create($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com sucesso !');
    }

    /**
     * Mostra o form preenchido para alteração
     * @param int Servico $servico
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit( Servico $servico)
    {
        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Atualiza um registro no banco de dados
     * @param Servico $servico
     * @param \App\Http\Requests\ServicoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);
    
        $servico->update($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com sucesso !');
    }
}

