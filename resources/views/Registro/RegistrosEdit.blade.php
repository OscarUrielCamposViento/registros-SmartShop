<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <!--x-navbars.sidebar activePage="Registros"></x-navbars.sidebar!-->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Editar"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                

                <div class="row bg-succes justify-content-center  vh-200">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <form action="{{url('/Registros/'.$registro->id)}}" method='post'>
                                @csrf
                                {{ method_field('PATCH') }}

                                @include('Registro.Form');
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>