    
    <div class="row p-2 form-group">
        <div class="col p-2" >
            <label for="Fecha">Fecha </label>
            <input name="Fecha" type="date" id="Fecha" class="form-control border"  style="text-align:center;" value="{{$registro->fecha}}">
        </div>
        <div class="col p-2" >
            <label for="Hora">Hora</label>
            <input name="Hora" type="time"  id="Hora"  class="form-control border"  style="text-align:center;" value="{{$registro->hora}}">
        </div>
    </div>


    <h2>Datos del cliente</h2>
    <div class="p-2 form-group">
        <label for="Cliente">Nombre del cliente</label>
        <input name="Cliente" type="text" id="Cliente" 
                class="form-control border"  
                placeholder=" Nombre del cliente" 
                value="{{$registro->cliente}}">
    </div>
    <div class="row p-2 form-group">
        <div class="col p-2 form-group">
            <label for="Telefono">Telefono</label>
            <input name="Telefono" type="tel" id="Telefono" 
                    class="form-control border"  
                    placeholder="numero de telefono"
                    value="{{$registro->telefono}}">
        </div>
        <div class="col p-2 form-group">
            <label for="Domicilio">Domicilio</label>
            <input name="Domicilio" type="Domicilio" id="Domicilio" 
                    class="form-control border"  
                    placeholder=" Domicilio"
                    value="{{$registro->domicilio}}">
        </div>
    </div>
    <div class="p-2 form-group">
        <label for="Correo">Correo</label>
        <input name="Correo" type="Correo" id="Correo"
                class="form-control border"
                placeholder=" Correo"
                value="{{$registro->correo}}">
    </div>


    <h2>Datos del dispositivo</h2>
    <div class="row p-2 form-group">
        <div class="col p-2 form-group">
            <label for="Marca">Marca</label>
            <input name="Marca" type="Marca" id="Marca"
                    class="form-control border"
                    placeholder=" Marca"
                    value="{{$registro->marca}}">
        </div>
        <div class="col p-2 form-group">
            <label for="Modelo">Modelo</label>
            <input name="Modelo" type="Modelo" id="Modelo"
                    class="form-control border"
                    placeholder="Modelo"
                    value="{{$registro->modelo}}">
        </div>
    </div>
    <div class="p-2 form-group">
        <label for="Codigo_de_desbloqueo">Codigo de desbloqueo</label>
        <input name="Codigo_de_desbloqueo" type="text" id="Codigo_de_desbloqueo" 
                class="form-control border"
                placeholder=" Codigo_de_desbloqueo"
                value="{{$registro->codigo_de_desbloqueo}}">
    </div>
    <div class="p-2 form-group">
        <label for="Accesorios">Accesorios</label>
        <input name="Accesorios" type="Accesorios" id="Accesorios"
                class="form-control border"
                placeholder=" Accesorios"
                value="{{$registro->accesorios}}">
    </div>


    <h2>Datos del servicio</h2>
    <div class="p-2 form-group">
        <label for="Servicio">Servicio</label>
        <input name="Servicio" type="Servicio" id="Servicio"
                class="form-control border"
                placeholder=" Servicio"
                value="{{$registro->servicio}}">
    </div>
    <div class="p-2 form-group">
        <label for="Observaciones">Observaciones</label>
        <input name="Observaciones" type="text" id="Observaciones"
                class="form-control border"
                placeholder="Observaciones"
                value="{{$registro->observaciones}}">
    </div>
    <div class="p-2 form-group">
        <label for="Descripcion_de_la_falla">Descripcion de la falla</label>
        <input name="Descripcion_de_la_falla" type="text" id="Descripcion_de_la_falla"
                class="form-control border"
                placeholder="Descripcion_de_la_falla"
                value="{{$registro->descripcion_de_la_falla}}">
    </div>
    <br>

   













    <h2>Datos del cliente</h2>
    <div class="p-2 form-group">
        <label for="Cliente">Nombre del cliente</label>
        <input name="Cliente" type="text" id="Cliente" class="form-control border"  placeholder=" Nombre del cliente" value="{{$registro->cliente}}">
    </div>
    <div class="row p-2 form-group">
        <div class="col p-2 form-group">
            <label for="Telefono">Telefono</label>
            <input name="Telefono" type="tel" id="Telefono" class="form-control border"  placeholder="numero de telefono">
        </div>
        <div class="col p-2 form-group">
            <label for="Domicilio">Domicilio</label>
            <input name="Domicilio" type="Domicilio" id="Domicilio" class="form-control border"  placeholder=" Domicilio">
        </div>
    </div>
    <div class="p-2 form-group">
        <label for="Correo">Correo</label>
        <input name="Correo" type="Correo" id="Correo" class="form-control border"  placeholder=" Correo">
    </div>


    <h2>Datos del dispositivo</h2>
    <div class="row p-2 form-group">
        <div class="col p-2 form-group">
            <label for="Marca">Marca</label>
            <input name="Marca" type="Marca" id="Marca" class="form-control border"  placeholder=" Marca">
        </div>
        <div class="col p-2 form-group">
            <label for="Modelo">Modelo</label>
            <input name="Modelo" type="Modelo" id="Modelo" class="form-control border"  placeholder=" Modelo">
        </div>
    </div>
    <div class="p-2 form-group">
        <label for="Codigo_de_desbloqueo">Codigo de desbloqueo</label>
        <input name="Codigo_de_desbloqueo" type="text" id="Codigo_de_desbloqueo" class="form-control border"  placeholder=" Codigo_de_desbloqueo">
    </div>
    <div class="p-2 form-group">
        <label for="Accesorios">Accesorios</label>
        <input name="Accesorios" type="Accesorios" id="Accesorios" class="form-control border"  placeholder=" Accesorios">
    </div>


    <h2>Datos del servicio</h2>
    <div class="p-2 form-group">
        <label for="Servicio">Servicio</label>
        <input name="Servicio" type="Servicio" id="Servicio" class="form-control border"  placeholder=" Servicio">
    </div>
    <div class="p-2 form-group">
        <label for="Observaciones">Observaciones</label>
        <input name="Observaciones" type="text" id="Observaciones" class="form-control border"  placeholder=" Observaciones">
    </div>
    <div class="p-2 form-group">
        <label for="Descripcion_de_la_falla">Descripcion de la falla</label>
        <input name="Descripcion_de_la_falla" type="text" id="Descripcion_de_la_falla" class="form-control border"  placeholder="Descripcion_de_la_falla">
    </div>
    <br>

    <div>
        <button type="submit" class="p-2 btn btn-primary">Enviar</button>
    </div>