<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{$data}}
    <div class="hoja">
        <div class="contenido">
            <h3>Smart Shop Reparaciones y Accesorios</h3>
            <h4>Calle 19 entre 22 y 24, Telchac Pueblo, Yucatán C.P. 97400</h4>
            <table class="tabla1">
                <tr>
                    <td><p>Teléfono:_____<t>9911022426</t>_____</p></td>
                    <td colspan="2"><p>RFC: __<t>CANL981113BR9</t>__</p></td>
                    <td><p>Folio:_____<t>{{$data->id}}</t>_____</p></td>
                    
                </tr>
                <tr>
                    <td><p>PRESUPUESTO: $_______</p></td>
                    <td><p>ABONO:$________</p></td>
                    <td><p>RESTA:$________</p></td>
                    <td><p>TOTAL:$________</p></td>
                </tr>
                <tr>
                    <td><p>Fecha:_____<t>{{$data->fecha}}</t>_____</p></td>
                    <td><p>Hora:_____<t>{{$data->hora}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>Cliente:_____<t>{{$data->cliente}}</t>_____</p></td>
                    <td></td>
                    <td><p>Telefono:__<t>{{$data->telefono}}</t>__</p></td> 
                </tr>
                <tr>
                    <td><p>lugar/pueblo_____<t>{{$data->cliente}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>IMEI / SN :_____<t>{{$data->correo}}</t>_____</p></td>
                    <td></td>
                    <td colspan="2"><p>CODIGO DE DESBLOQUEO:_____<t>{{$data->codigo_de_desbloqueo}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>Marca :_____<t>{{$data->marca}}</t>_____</p></td> 
                </tr>
                <tr>
                    <td><p>Modelo :_____<t>{{$data->modelo}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>Servicio :_____<t>{{$data->servicio}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>Accesorios :_____<t>{{$data->accesorios}}</t>_____</p></td>
                </tr>
                <tr>
                    <td><p>Observaciones :_____<t>{{$data->observaciones}}</t>_____</p></td>
                </tr>
                <tr>
                    <td colspan="4"><p>Descripcion de la falla :_____<t>{{$data->descripcion_de_la_falla}}</t>____</p></td>
                </tr>
                
            </table>
            <br>
            
            <div class="texto">
                <p class="textoP">
                    EN CASO DE QUE EL CLIENTE NO ACEPTARA LA REPARACION DEL EQUIPO POR CUALQUIER CAUSA O EL RECLAMO DE
                    GARANTIA NO FUERA PROCEDENTE, EL CLIENTE SE COMPROMETE AL PAGO DE REVISION DE $50 PESOS.
                </p>
                <p class="textoP">
                    TODO TRABAJO URGENTE SE REALIZARÁ CON UN COSTO EXTRA DEL 10% DEL COSTO TOTAL A PAGAR.
                </p>
                <p class="textoP">
                    EL EQUIPO AMPARADO POR LA PRESENTE SE RECIBE UNICAMENTE CON LO ESPECIFICADO EN ACCESORIOS Y SI SE
                    LLEGAN A NECESITAR PARA REVISIÓN ENTREGANDO EL 50% DEL TOTAL COTIZADO. 
                </p>
                <p class="textoP">
                    PARA RECOGER EL EQUIPO ES NECESARIO LIQUIDAR EL COSTO DE LA REPARACION ASI COMO LA PRESENTACION DE
                    ESTE DOCUMENTO O FOLIO DE REVISION. EN CASO DE EXTRAVIO SE COBRARÁ $50 DE MULTA.
                </p>
                <p class="textoP">
                    TODO EQUIPO NO RECLAMADO O LIQUIDADO A LOS 30 DIAS DE REPARADO CAUSARA ABANDONO Y NO NOS HACEMOS
                    RESPONSABLES DE SU EQUIPO. EN EQUIPOS DEJADOS Y SIN RECOGER NOS DESLINDAMOS DE RESPONSABILIDADES EN
                    CASO DE QUE ALGUN COMPONENTE SE ENCUENTRA EN MAL ESTADO O EXTRAVIO TOTAL O PARCIAL DEL EQUIPO.
                </p>
                <p class="textoP">
                    LA GARANTIA EN REFACCIONES SERA LA ESPECIFICADA POR EL FABRICANTE Y EN MANO DE OBRA DE REPARACION SERA
                    DE 7 DIAS SOBRE LA MISMA FALLA. (EN EQUIPOS MOJADOS, HUMEDOS, CON TOUCH O IMAGEN FALLANDO DESPUES DE LA
                    REVISION EN LA ENTREGA CON EL CLIENTE NO HAY GARANTIA).
                </p>
                <p class="textoP">
                    EL DIA DOMINGO NO SE HACEN REPARACIONES NI ENTREGAS DE NINGUN TIPO (TODOS LOS EQUIPOS QUE SE DEJEN
                    EN ESE DIA MISMO SE TRABAJARA EL DIA LUNES).
                </p>
                <p class="textoP">
                    EQUIPO QUE NO ENCIENCE SE RECIBE BAJO RESPONSABILIDAD DEL CLIENTE, YA QUE APAGADOS NO PERMITE
                    VERIFICAR ALGUN OTRO FALLO FUTURO A LA REPARACION. SI EXISTE ALGUNA OTRA FALLA ADICIONAL SERA TOMADA
                    COMO REPARACIÓN ADICIONAL CON OTRO COBRO.
                </p>
                <p class="textoP">
                    SOLO SE LE ENTREGARA EL EQUIPO AL TITULAR O PERSONAS AUTORIZADAS POR ÉL MISMO EN ESTE DOCUMENTO.
                </p>
            </div>
            <table class="tabla2">
                <tr>
                    <td colspan="5" class="td2"><p>ESTADO EN QUE SE RECIBE EL EQUIPO</p> </td>
                </tr>
                <tr>
                    <td class="td2"><p>BLOQUEADO</p></td>
                    <td class="td2"><p>TAPA</p></td>
                    <td class="td2"><p>BATERIA</p></td>
                    <td class="td2"><p>CUENTA</p></td>
                    <td class="td2"><p>PANTALLA / DISPLAY</p></td>
                </tr>
                <tr>
                    <td class="td2"><p>BOTONES</p></td>
                    <td class="td2"><p>TACTIL</p></td>
                    <td class="td2"><p>RAYONES</p></td>
                    <td class="td2"><p>MOJADO</p></td>
                    <td class="td2"><p>REPORTADO</p></td>
                </tr>
                <tr>
                    <td class="td2"><p>SISTEMA OPERATIVO</p> </td>
                    <td class="td2"><p>PIEZAS FALTANTES</p> </td>
                    <td class="td2"><p>ENCENDIDO</p></td>
                    <td class="td2"><p>FRACTURA</p></td>
                    <td class="td2"><p>C.C. U OTROS</p></td>
                </tr>
            </table>
            <br><br><br>
            <table class="tabla3">
                <tr>
                    <td class="td3">FIRMA CLIENTE</td>
                    <td class="td3Nul"></td>
                    <td class="td3">FIRMA Y FECHA DE RECIBIDO</td>
                </tr>
            </table>
        </div>

            
        




    </div>
    {{url('imagenes\logo_smartShop.png')}}
    <br>

    <img src="{{url('imagenes\logo_smartShop.png')}}">
    
    <div class="qlito">
ddddddddddddddddd
    </div>
    

<style>
.qlito{
    background:red;
    background-image: url('{{url('imagenes\logo_smartShop.png')}}');
}
    .hoja {
        background:red;
        width: 793.7008874px;
        height: 1122.5198265px;
        background-image: url("{{url('imagenes\logo_smartShop.png')}}");
    
    /*background:red;*/
    }
    .contenido{
        padding: 0  50px;
        text-align: center;
    }
    .texto{
        text-align:left;
    }
    .textoP{
        font-size:13px;
        padding: 5px;
        margin: 4px;
    }

    t{
        text-decoration-line: underline;
    }

    p{
        font-size:13px;
        padding: 0px;
        margin: 4px;
    }
    .tabla1{
        /*background:blue;*/
        width: 693.7008874px;
    }
    .tabla2{
        text:center;
        border-collapse: collapse;
        width: 693.7008874px;    
    }
    .tabla3{
        width: 693.7008874px;
        
        
    }
    
    .td2{
        padding: 0px;
        border: black 1px solid;
        text-align: center;
    }
    .td3{
        width: 346.8504437px;
        padding: 0px;
        border-top: black 1px solid;
        text-align: center;
    }
    .td3Nul{
        width: 346.8504437px;
        padding: 0px;
        border: black 0px solid;
        text-align: center;

    }
    td{
        padding: 0px;
    }
    tr{
        padding: 0px;
        text-align:left;
        margin: 0px;
    }

</style>

</body>
</html>

