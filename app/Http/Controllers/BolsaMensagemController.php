<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBolsaAluno;
use App\Models\ModelBolsaMensagem;


class BolsaMensagemController extends Controller
{
    private $objBolsaAluno;
    private $objMensagem;
    public function __construct()
    {
         $this->objBolsaAluno=new ModelBolsaAluno();
        $this->objMensagem=new ModelBolsaMensagem();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagem=($this->objMensagem->all());
        #dd($this->objBolsaAluno->find(1)->relMensagens);
        #dd($this->objMensagem->find(1)->relBolsa);
        #$this->objBolsaAluno->all();
        return view('pages/bolsamensagem', compact('mensagem'));
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
        //
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
