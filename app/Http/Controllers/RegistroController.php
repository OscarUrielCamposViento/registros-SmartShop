<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\Facade\Pdf as PDF; 

use Illuminate\Http\Request;
use App\Models\Registro;
use Carbon\Carbon;
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        /*echo $request->buscar;*/
        $buscar = $request->buscar;
        
        
        $registros=Registro::where('id','like','%'.$buscar.'%')
                ->orwhere('cliente','like','%'.$buscar.'%')
                
                ->paginate(5);
                $registros->withPath("Registros?buscar=".$buscar);
        $data = [
            'registros' => $registros,
            'buscar' =>$buscar,
        ];
        return view('Registro.RegistrosIndex',$data);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $now = Carbon::now()->addHour(-1);
        $currentDate = $now->format (format: 'Y-m-d');
        $currentTime = $now->format (format:'h:i');

        
          
        return view('Registro.RegistrosCreate') -> with (compact('now','currentDate','currentTime'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosRegistro = request() -> all();
        $datosRegistro = request() -> except('_token');
        Registro::insert($datosRegistro);
        //return response() -> json($datosRegistro);
        //return view('Registro.RegistrosIndex');
        return redirect('/Registros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show($id)//public function show(Registro $registro)
    {
        
        $data = Registro::findOrFail($id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('Registro.PDF',['data'=>$data]);
        return $pdf->stream();
        
    
        //
        /*
        $data=Registro::findOrFail($id);
        return view('Registro.PDF', compact('data') );
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $registro=Registro::findOrFail($id);
        return view('Registro.RegistrosEdit', compact('registro') );
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRegistro = request() -> except(['_token','_method']);
        Registro::where('id','=',$id) -> update($datosRegistro);

        $registro=Registro::findOrFail($id);
        return view('Registro.RegistrosEdit', compact('registro') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Registro::destroy($id);
        return redirect('Registros');
    }
}
