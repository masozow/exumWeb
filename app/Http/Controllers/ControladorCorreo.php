<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//la siguiente referencia hace uso del archivo EnviarCorreo que se creó en la carpeta "Mail"
use App\Mail\EnviarCorreo;

class ControladorCorreo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        //
    }*/

    public function mail(Request $request)
    {
        $remitenteNombre  = $request->remitenteNombre;
        $remitenteCorreo  = $request->remitenteCorreo;
        $mensaje = $request->mensaje;
        Mail::to('exumgt@gmail.com')->send(new EnviarCorreo($remitenteNombre,$remitenteCorreo,$mensaje));
        //return 'Email was sent';
    }
}
