<x-layout bodyClass="g-sidenav-show  bg-gray-200">
            
        <!--x-navbars.sidebar activePage="Registros"></x-navbars.sidebar -->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Registros"></x-navbars.navs.auth>
            <!-- End Navbar -->


            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">


                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    
                                    
                                    <table class="table table-borderless">
                                        <tr>
                                            
                                            <th class="text-white text-capitalize ps-3">Registros</th>
                                            
                                            
                                            <th class="text-end px-5 ">
                                                <a class="btn bg-gradient-success text-xs" 
                                                    href="{{ url('Registros/create') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                     Nuevo Registro
                                                </a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class=" w-50 px-0">
                                            

                                                <form action=" {{route('Registros.index')}} " method="GET" class="input-group rounded  px-5">
                                                    <input name="buscar" value="{{$buscar}}" type="search" class=" btn bg-light form-control rounded pe-4" placeholder="   Buscar" aria-label="  Buscar"  />
                                                    
                                                    <button type="submit" class=" btn btn-light" >
                                                        
                                                            <i class="fas fa-search"></i>
                                                        
                                                    </button>
                                                    
                                                </form>

  
                                            </th>
                                        </tr>
                                    </table>


                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0 text-center">


                                <!-- Paginate -->
                                    <table class="table-borderless">
                                        <td>
                                            <tr>
                                                <a  href="{{$registros->previousPageUrl()}}"
                                                    class="btn bg-gradient-primary w-30 my-4 mb-2"> 
                                                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                        Pagina Anterior
                                                        
                                                </a>
                                            </tr>
                                            <tr>                                            
                                                    {{ $registros->currentPage()}} 
                                                    /
                                                    {{$registros->lastPage()}} 
                                            </tr>      
                                            <tr>
                                                <a  href="{{$registros->nextPageUrl()}}"
                                                    class="btn bg-gradient-primary w-30 my-4 mb-2"> 
                                                            Pagina Siguente 
                                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                </a>
                                            </tr>
                                        </td>
                                        
                                    </table>
                                <!-- End Paginate -->


                                    <!-- tabla de la informacion de los registros -->
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center text-sm">  ID</th>
                                                <th class="align-middle text-center text-sm"> Cliente</th>
                                                <th class="align-middle text-center text-sm"> Equipo</th>
                                                <th class="align-middle text-center text-sm"> Servicio</th>
                                                <th class="align-middle text-center text-sm"> Fecha/Hora</th>
                                                <th class="align-middle text-center text-sm"> Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($registros as $data)
                                            <tr>
                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">{{$data->id}}</h6>  
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$data->cliente}} </h6>
                                                            <p class="text-xs font-weight-bold mb-0">{{$data->telefono}}</p>
                                                            <p class="text-xs text-secondary mb-0">{{$data->correo}}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">{{$data->marca}}</h6>
                                                    <p class="text-xs font-weight-bold mb-0">{{$data->modelo}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$data->accesorios}}</p>
                                                </td>

                                                <td class="align-middle text-center text-sm ">
                                                    <p class="text-xs font-weight-bold mb-0">{{$data->servicio}}</p>
                                                    <p class="text-xs text-secondary mb-0 "> descripcion de la fallla {{$data->descripcion_de_la_falla}}</p>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{$data->fecha}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$data->hora}}</p>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                        
                                                    <table>
                                                        <tr>

                                                            <td>
                                                                <div class="btn  p-0">
                                                                
                                                                    <a type="button" class="btn bg-gradient-success" href="{{url('Registros/'.$data->id)}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                                                        </svg>
                                                                        <span class="visually-hidden">PDF</span>
                                                                    </a>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="btn  p-0">
                                                                    <a type="button" class="btn bg-gradient-warning" href="{{url('Registros/'.$data->id. '/edit')}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                        </svg>
                                                                        <span class="visually-hidden">Editar</span>
                                                                    </a>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <form action="{{url('Registros/'.$data->id)}}" method="post" class="btn p-0">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn bg-gradient-danger" onclick="return confirm('¿Quieres borrar este registro?')">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                                                                        </svg>
                                                                        <span class="visually-hidden">Eliminar</span>
                                                                    </button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                                                                       
                                                </td>
                                            </tr>
                                            @endforeach
  
                                        </tbody>
                                    </table>
                                    <!-- End tabla de la informacion de los registros -->
                                


                                    <!-- Paginate -->
                                    <table class="table-borderless">
                                        <td>
                                            <tr>
                                                <a  href="{{$registros->previousPageUrl()}}"
                                                    class="btn bg-gradient-primary w-30 my-4 mb-2"> 
                                                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                        Pagina Anterior
                                                        
                                                </a>
                                            </tr>
                                            <tr>                                            
                                                    {{ $registros->currentPage()}} 
                                                    /
                                                    {{$registros->lastPage()}} 
                                            </tr>      
                                            <tr>
                                                <a  href="{{$registros->nextPageUrl()}}"
                                                    class="btn bg-gradient-primary w-30 my-4 mb-2"> 
                                                            Pagina Siguente 
                                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                </a>
                                            </tr>
                                        </td>
                                        
                                    </table>
                                    <!-- End Paginate -->
                                    
                                </div>

   
                                <div class="px-2 text-end">
                                        <a class="btn bg-gradient-success text-xs" 
                                            href="{{ url('Registros/create') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                                Nuevo Registro
                                        </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>