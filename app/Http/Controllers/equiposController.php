<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use App\Partidos;
use APP\Puntos;
/**
 * Class equiposController
 * @package App\Http\Controllers
 */
class equiposController extends Controller
{
    /**
     * @var int
     */
    public $PuntosA;
    /**
     * @var int
     */
    public $PuntosB;
    /**
     * @var int
     */
    public $PuntosC;
    /**
     * @var int
     */
    public $PuntosD;
    /**
     * @var int
     */
    public $GolesA;
    /**
     * @var int
     */
    public $GolesB;
    /**
     * @var int
     */
    public $GolesC;
    /**
     * @var int
     */
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

        return view('equipo.index', compact('equipos'));

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
        $equipos = Equipos::FindOrfail($id);
        return view('equipo.puntaje',compact('equipos'));
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
        $partidos = Puntos::all();
        $contador = 0;
        foreach ($partidos as $partido) {

            $contador = $contador + 1;
            if ($equipos->id != $partido->GrupoEquipos) {
                Puntos::insert(['GrupoEquipos' => $equipos->id, 'Equipo' => $contador]);

            } else {
                return view('equipo.partidos', compact('equipos', 'partido'));
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
        $toarrayDatos = [
            'PuntosA' => 0,
            'PuntosB' => 0,
            'PuntosC' => 0,
            'PuntosD' => 0,
            'GolesA' => 0,
            'GolesB' => 0,
            'GolesC' => 0,
            'GolesD' => 0,
        ];
        $datosequipos = $request->except(['_token', '_method']);
//        dd($request['PartidoAC']);
        if ($request['PartidoAB'] > $request['PartidoBA']) {
            $this->PuntosA = $this->PuntosA + 3;
        } elseif ($request['PartidoAB'] < $request['PartidoBA']) {
            $this->PuntosB = $this->PuntosB + 3;
        } else {
            $this->PuntosA = $this->PuntosA + 1;
            $this->PuntosB = $this->PuntosB + 1;
        }

        if ($request['PartidoAC'] > $request['PartidoCA']) {
            $this->PuntosA = $this->PuntosA + 3;
        } elseif ($request['PartidoAC'] < $request['PartidoCA']) {
            $this->PuntosC = $this->PuntosC + 3;
        } else {
            $this->PuntosA = $this->PuntosA + 1;
            $this->PuntosC = $this->PuntosC + 1;
        }


        if ($request['PartidoAD'] > $request['PartidoDA']) {
            $this->PuntosA = $this->PuntosA + 3;
        } elseif ($request['PartidoAD'] < $request['PartidoDA']) {
            $this->PuntosD = $this->PuntosD + 3;
        } else {
            $this->PuntosA = $this->PuntosA + 1;
            $this->PuntosD = $this->PuntosD + 1;
        }


        if ($request['PartidoCB'] > $request['PartidoBC']) {
            $this->PuntosC = $this->PuntosC + 3;
        } elseif ($request['PartidoCB'] < $request['PartidoBC']) {
            $this->PuntosB = $this->PuntosB + 3;
        } else {
            $this->PuntosC = $this->PuntosC + 1;
            $this->PuntosB = $this->PuntosB + 1;
        }


        if ($request['PartidoDB'] > $request['PartidoBD']) {
            $this->PuntosD = $this->PuntosD + 3;
        } elseif ($request['PartidoDB'] < $request['PartidoBD']) {
            $this->PuntosB = $this->PuntosB + 3;
        } else {
            $this->PuntosD = $this->PuntosD + 1;
            $this->PuntosB = $this->PuntosB + 1;
        }


        if ($request['PartidoDC'] > $request['PartidoCD']) {
            $this->PuntosD = $this->PuntosD + 3;
        } elseif ($request['PartidoDC'] < $request['PartidoCD']) {
            $this->PuntosC = $this->PuntosC + 3;
        } else {
            $this->PuntosD = $this->PuntosD + 1;
            $this->PuntosC = $this->PuntosC + 1;
        }
        $this->GolesA = $request['PartidoAB'] + $request['PartidoAC'] + $request['PartidoAD'] - $request['PartidoDA'] - $request['PartidoBA'] - $request['PartidoCA'];
        $this->GolesB = $request['PartidoBA'] + $request['PartidoBD'] + $request['PartidoBC'] - $request['PartidoAB'] - $request['PartidoCB'] - $request['PartidoDB'];
        $this->GolesC = $request['PartidoCA'] + $request['PartidoCB'] + $request['PartidoCD'] - $request['PartidoBC'] - $request['PartidoAC'] - $request['PartidoDC'];
        $this->GolesD = $request['PartidoDC'] + $request['PartidoDB'] + $request['PartidoDA'] - $request['PartidoAD'] - $request['PartidoBD'] - $request['PartidoCD'];
        $toarrayDatos = [
            'PuntosA' => $this->PuntosA,
            'PuntosB' => $this->PuntosB,
            'PuntosC' => $this->PuntosC,
            'PuntosD' => $this->PuntosD,
            'GolesA' => $this->GolesA,
            'GolesB' => $this->GolesB,
            'GolesC' => $this->GolesC,
            'GolesD' => $this->GolesD,
        ];
        Equipos::where('id','=',$id)->update($toarrayDatos);
        Puntos::where(['GrupoEquipos','=',$id],['Equipos','=',1])->update(['Puntos'=>$this->PuntosA,'Goles'=>$this->GolesA]);
        Puntos::where(['GrupoEquipos','=',$id],['Equipos','=',2])->update(['Puntos'=>$this->PuntosB,'Goles'=>$this->GolesB]);
        Puntos::where(['GrupoEquipos','=',$id],['Equipos','=',3])->update(['Puntos'=>$this->PuntosC,'Goles'=>$this->GolesC]);
        Puntos::where(['GrupoEquipos','=',$id],['Equipos','=',4])->update(['Puntos'=>$this->PuntosD,'Goles'=>$this->GolesD]);

        return redirect()->route('equipos.index');
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
