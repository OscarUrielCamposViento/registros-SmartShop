<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="Registros"></x-navbars.sidebar>
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
                                            
                                            <th class="text-end px-5">
                                                <a class="text-success font-weight-bold text-xs "
                                                    href="{{ url('Registros/create') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                     Nuevo Registro
                                                </a>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">


                                <!-- Paginate -->
                                <table class="table-borderless">
                                    <td>
                                        <tr>
                                            <a  href="{{$registros->previousPageUrl()}}"
                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white  leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"> 
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                        pagina anterior
                                            </a>
                                        </tr>
                                        <tr>
                                            <a href="" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white  leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                                <- 
                                                {{ $registros->currentPage()}} 
                                                /
                                                {{$registros->lastPage()}} 
                                                ->
                                            </a>
                                            
                                        </tr>
                                        <tr>
                                            <a  href="{{$registros->nextPageUrl()}}"
                                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white  leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"> 
                                                        pagina siguientes 
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                            </a>
                                        </tr>
                                    </td>
                                </table>
                                <!-- End Paginate -->



                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center text-sm">
                                                    ID</th>
                                                <th class="align-middle text-center text-sm">
                                                    Cliente</th>
                                                <th class="align-middle text-center text-sm">
                                                    Equipo</th>
                                                <th class="align-middle text-center text-sm">
                                                    Servicio</th>
                                                <th class="align-middle text-center text-sm">
                                                    Fecha/Hora</th>
                                                <th class="align-middle text-center text-sm">
                                                    Acciones</th>
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

                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{$data->servicio}}</p>
                                                    <p class="text-xs text-secondary mb-0 "> {{$data->descripcion_de_la_falla}}</p>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs font-weight-bold mb-0">{{$data->fecha}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$data->hora}}</p>
                                                </td>
                                                
                                                <td class="align-middle text-center text-sm">
                                                    <a href="#1"
                                                        class=" font-weight-bold text-xs "
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </a>
                                                    <a href="#2"
                                                        class=" font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </a>
                                                    <a href="#3"
                                                        class=" font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    <a href="#4"
                                                        class=" font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                                        </svg>                                                       
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                                                               
                                           
                                        </tbody>
                                    </table>
                                </div>
                                    
                                <div class="px-2 text-end">
                                    <a class="text-success font-weight-bold text-xs "
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