<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use App\Partidos;

class equiposController extends Controller
{
    public $PuntosA;
    public $PuntosB;
    public $PuntosC;
    public $PuntosD;
    public $GolesA;
    public $GolesB;
    public $GolesC;
    public $GolesD;

    /**
     * equiposController constructor.
     * @param $PuntosA
     * @param $PuntosB
     * @param $PuntosC
     * @param $PuntosD
     */
    public function __construct()
    {
        $this->PuntosA = 0;
        $this->PuntosB = 0;
        $this->PuntosC = 0;
        $this->PuntosD = 0;
        $this->GolesA = 0;
        $this->GolesB = 0;
        $this->GolesC = 0;
        $this->GolesD = 0;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipos = Equipos::get()->all();

        return view('equipo.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $equipo = $request->except('_token');
        Equipos::insert($equipo);
        $equipos = Equipos::get()->all();

        return view('equipo.index', compact('equipo'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $equipos = Equipos::FindOrfail($id);
        $partidos = Partidos::all();
        $contador=0;
        foreach ($partidos as $partido) {

            $contador=$contador+1;
            if ($equipos->id != $partido->GrupoEquipos){
                Partidos::insert(['GrupoEquipos' => $equipos->id, 'Equipo' => $contador]);

        }else{
                return view('equipo.partidos',compact('equipos','partido'));
            }

        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        dd($request['PartidoAC']);
        if($request['PartidoAB']>$request['PartidoBA']){
            $this->PuntosA=$this->PuntosA+3;
        }elseif ($request['PartidoAB']<$request['PartidoBA']){
            $this->PuntosB=$this->PuntosB+3;
        }else{
            $this->PuntosA=$this->PuntosA+1;
            $this->PuntosB=$this->PuntosB+1;
        }

        if($request['PartidoAC']>$request['PartidoCA']){
            $this->PuntosA=$this->PuntosA+3;
        }elseif ($request['PartidoAC']<$request['PartidoCA']){
            $this->PuntosC=$this->PuntosC+3;
        }else{
            $this->PuntosA=$this->PuntosA+1;
            $this->PuntosC=$this->PuntosC   +1;
        }


        if($request['PartidoAD']>$request['PartidoDA']){
            $this->PuntosA=$this->PuntosA+3;
        }elseif ($request['PartidoAD']<$request['PartidoDA']){
            $this->PuntosD=$this->PuntosD+3;
        }else{
            $this->PuntosA=$this->PuntosA+1;
            $this->PuntosD=$this->PuntosD+1;
        }


        if($request['PartidoCB']>$request['PartidoBC']){
            $this->PuntosC=$this->PuntosC+3;
        }elseif ($request['PartidoCB']<$request['PartidoBC']){
            $this->PuntosB=$this->PuntosB+3;
        }else{
            $this->PuntosC=$this->PuntosC+1;
            $this->PuntosB=$this->PuntosB+1;
        }


        if($request['PartidoDB']>$request['PartidoBD']){
            $this->PuntosD=$this->PuntosD+3;
        }elseif ($request['PartidoDB']<$request['PartidoBD']){
            $this->PuntosB=$this->PuntosB+3;
        }else{
            $this->PuntosD=$this->PuntosD+1;
            $this->PuntosB=$this->PuntosB+1;
        }


        if($request['PartidoDC']>$request['PartidoCD']){
            $this->PuntosD=$this->PuntosD+3;
        }elseif ($request['PartidoDC']<$request['PartidoCD']){
            $this->PuntosC=$this->PuntosC+3;
        }else{
            $this->PuntosD=$this->PuntosD+1;
            $this->PuntosC=$this->PuntosC+1;
        }
        $this->GolesA=$request['PartidoAB']+$request['PartidoAC']+$request['PartidoAD'];
        $this->GolesB=$request['PartidoBA']+$request['PartidoBD']+$request['PartidoBC'];
        $this->GolesC=$request['PartidoCA']+$request['PartidoCB']+$request['PartidoCD'];
        $this->GolesD=$request['PartidoDC']+$request['PartidoDB']+$request['PartidoDA'];

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
