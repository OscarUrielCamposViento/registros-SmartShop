<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <!--x-navbars.sidebar activePage="Registros"></x-navbars.sidebar!-->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Registros"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                

                <div class="row bg-succes justify-content-center  vh-200">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <form action="{{url('/Registros') }}" method='post'>
                                @csrf

                                <div class="row p-2 form-group">
                                    <div class="col p-2" >
                                        <label for="Fecha">Fecha </label>
                                        <input name="Fecha" type="date" id="Fecha" class="form-control border"  style="text-align:center;" value="{{$currentDate}}">
                                    </div>
                                    <div class="col p-2" >
                                        <label for="Hora">Hora</label>
                                        <input name="Hora" type="time"  id="Hora"  class="form-control border"  style="text-align:center;" value="{{$currentTime}}">
                                    </div>
                                </div>


                                <h2>Datos del cliente</h2>
                                <div class="p-2 form-group">
                                    <label for="Cliente">Nombre del cliente</label>
                                    <input name="Cliente" type="text" id="Cliente" class="form-control border"  placeholder=" Nombre del cliente">
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




                            
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>