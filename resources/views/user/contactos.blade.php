{{-- Extends layout --}}
@extends('layout.default')
@section('contenido')
<div style="text-align: center;" class="content  d-flex flex-column flex-column-fluid" id="kt_content">

<div class="d-flex flex-row">
    
    <x-perfil></x-perfil>

	<div class="flex-row-fluid ml-lg-8">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			<div class="card-header py-3">
				<div class="card-title align-items-start flex-column">
					<h3 class="card-label font-weight-bolder text-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Solicitudes de amistad : </font></font></h3>
                </div>
				<div class="card-toolbar">
                
                </div>
			</div>
            <!--end::Header-->
            <table class="table">
    <tbody>
        @foreach($solicitudes as $solicitud)
            <tr>
                <th scope="row">
                    <div class="symbol symbol-lg-75">
                        <img alt="Foto" src="{{ url(''.'/get-imagen/'.$solicitud->solicitudes->foto.'') }}">
                    </div>
                </th>
                <td style="padding-top: 2.2rem!important;">{{ $solicitud->solicitudes->name  }}</td>
                <td style="padding-top: 2.2rem!important;">{{ $solicitud->solicitudes->email  }}</td>
                <td style="padding-top: 2.2rem!important;">
                    <a href="{{route('aceptar',$solicitud->id)}}"><button style="padding: 2px;" type="reset" class="btn btn-success mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aceptar</font></font></button></a>
                    <a href="{{route('eliminar',$solicitud->id)}}"><button style="padding: .20rem;background-color: #FE3657; border-color: #fff;" type="reset" class="btn btn-success mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rechazar</font></font></button></a>      
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            <hr>
			<!--begin::Form-->
			<form class="form">
                
				<!--begin::Body- Card BODY-----------------------------------------------------============-->
				<div class="card-body">
                <div class="flex-row-lg-fluid ml-lg-8">
                    <h1 style="text-align: center;">Contactos</h1>
                    <br>
        <!--begin::Row-->

        <div class="row">
            <!--begin::Col-->
            @foreach($friends as $friend)
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4 d-flex flex-column justify-content-between">
                        <!--begin::Toolbar-->
                                           <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                <div class="symbol symbol-lg-75">
                                    <img alt="Foto" src="{{ url(''.'/get-imagen/'. $friend->foto.'') }}">
                                </div>
                                <div class="symbol symbol-lg-75 symbol-primary d-none">
                                    <span class="font-size-h3 font-weight-boldest">JM</span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$friend->name}}</font></font></a>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gratuito</font></font></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                       
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$friend->email}}</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$friend->email}}</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></span>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">escribe un mensaje</font></font></a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            
            @endforeach
        </div>
        <!--end::Row-->
        <!--begin::Pagination-->
<div class="card card-custom">
    <div class="card-body py-7">
        <!--begin::Pagination-->
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex flex-wrap mr-3">
                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">...</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></a>
                <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">...</font></font></a>
                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
            </div>
            <div class="d-flex align-items-center">
                <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                    <option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
                    <option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
                    <option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
                    <option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
                    <option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>
                </select>
                <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mostrando 10 de 230 registros</font></font></span>
            </div>
        </div>
        <!--end:: Pagination-->
    </div>
</div>
<!--end::Pagination-->
    </div>
    <br>
    <hr>
    <h1 style="text-align: center;">Empresas</h1>
    <hr>
    <div class="row">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4 d-flex flex-column justify-content-between">
                        <!--begin::Toolbar-->
                        
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                <div class="symbol symbol-lg-75">
                                    <img alt="Foto" src="{{asset('img/chip.png')}}">
                                </div>
                                <div class="symbol symbol-lg-75 symbol-primary d-none">
                                    <span class="font-size-h3 font-weight-boldest">JM</span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ifomectronic</font></font></a>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empresa de Software</font></font></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Lider en </font></font><a href="#" class="text-primary pr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Software</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> para el desarrollo 
                        </font></font></p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">contact@Ifomectronic.com</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44 (76) 34254578</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ubicación:</font></font></span>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">México</font></font></span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">escribe un mensaje</font></font></a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4 d-flex flex-column justify-content-between">
                        <!--begin::Toolbar-->
                       
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                <div class="symbol symbol-lg-75">
                                <img alt="Foto" src="{{asset('img/viaje.jfif')}}">
                                </div>
                                <div class="symbol symbol-lg-75 symbol-primary d-none">
                                    <span class="font-size-h3 font-weight-boldest">JM</span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EnimeX</font></font></a>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empresa</font></font></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Empresa lider en </font></font><a href="#" class="text-primary pr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">envios</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Grandes
                             </font></font><span class="text-dark-75 font-weight-bolder pr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
                        </font></font></p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Services@enimex.com</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44 (76) 34254578</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ubicación:</font></font></span>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guadalajara</font></font></span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">escribe un mensaje</font></font></a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4 d-flex flex-column justify-content-between">
                        <!--begin::Toolbar-->
                      
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                <div class="symbol symbol-lg-75 d-none">
                                    <img alt="Pic" src="assets/media/users/300_10.jpg">
                                </div>
                                <div class="symbol symbol-lg-75 symbol-primary">
                                    <span class="symbol-label font-size-h3 font-weight-boldest"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alaska</font></font></span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alaska.com</font></font></a>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Empresa</font></font></span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Empresa experta en </font></font><a href="#" class="text-primary pr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">linea fria</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> en toda Norte America
                             </font></font><span class="text-dark-75 font-weight-bolder pr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></span>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">service@Alask.com</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-2">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono:</font></font></span>
                                <a href="#" class="text-muted text-hover-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">52 (43) 56254826</font></font></a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ubicación:</font></font></span>
                                <span class="text-muted font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chihuahua</font></font></span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#" class="btn btn-block btn-sm btn-light-primary font-weight-bolder text-uppercase py-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">escribe un mensaje</font></font></a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        </div>
                </div>
				<!--end::Body-->
			</form>
			<!--end::Form-->
		</div>
	</div>
	<!--end::Content-->
</div>

</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript')}}"></script>
@endsection