{{-- Extends layout --}}
@extends('layout.default')

	
@section('contenido') 
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <div class="d-flex flex-column-fluid">
		    <!--begin::Container-->
		    <div class="container ">
			<!--begin::Education-->
                <div class="d-flex flex-row">

                    <!--begin::Aside-->
                    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                        <!--Perfil-->
                        <x-perfil-card></x-perfil-card>
                        <!--Biblioteca-->
                        <x-biblioteca-card></x-biblioteca-card>
                    </div>
                    <!--end::Aside-->

                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8">
                        <div class="row">
                            <div class="col-xxl-7">
                                <!--Postear Publicacion-->
                                <x-post-card></x-post-card>

                                <!--Ver Publicaciones-->
                                <x-get-card></x-get-card>

                                @if(Auth::user()->type == 0)
                                    <!--Publicidad-->
                                    <x-publicidad-card></x-publicidad-card>
                                @endif
                            </div>

                            <div  class="col-xxl-5">
                                <!--Tv-->
                                <x-tv-card></x-tv-card>
                                <!--Conferencia-->
                                <x-conferencia-card></x-conferencia-card>
                                <!--Cursos-->
                                <x-cursos-card></x-cursos-card>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
	    </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
    <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>
    <script src="assets/js/pages/widgets.js?v=7.0.6"></script>
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript')}}"></script>
@endsection