{{-- Extends layout --}}
@extends('layout.default')
@section('contenido')
    

<div style="text-align: center;" class="content  d-flex flex-column flex-column-fluid" id="kt_content">

<div class="d-flex flex-row">
	<!--begin::Aside-->
    <x-perfil></x-perfil>
	<!--end::Aside-->
	
	<div class="flex-row-fluid ml-lg-8">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			<div class="card-header py-3">
				<div class="card-title align-items-start flex-column">
					<h3 class="card-label font-weight-bolder text-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informacion personal</font></font></h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualice su información personal</font></font></span>
                </div>
				
			</div>
			<!--end::Header-->

			<!--begin::Form-->
			
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mb-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></h5>
						</div>
                    </div>
                <form class="form" action="{{route('Foto')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>
						<div class="col-lg-9 col-xl-6">
							<div class="image-input image-input-outline" id="kt_img" style="background-image: url()">
                            <div class="image-input-wrapper" style="background-image: url({{ url(''.'/get-imagen/'. Auth::user()->foto.'') }})"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" requiered name="fotos[]" multiple>
        							<input type="hidden" name="profile_avatar_remove">
                                </label>

        						<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"  data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                               <a href="{{route('foto_eliminar')}}" ><span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"  data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span></a>
                            </div>
                            <span class="form-text text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipos de archivo permitidos: png, jpg, jpeg.</font></font></span>
                        </div>
                  
                    </div>
                    <div class="card-toolbar">
                        <button type="submit" class="btn btn-success mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar</font></font></button>
                     </div>
				</form>
				<br>
				<form action="{{route('guardar_cambios')}}" method="POST">	
				@csrf
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{Auth::user()->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefono</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" name="phone" type="text" value="{{Auth::user()->phone}}">
						</div>
					</div>
					<button type="submit" class="btn btn-success mr-"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar cambios</font></font></button>
					</div>
					<!------------------------------------------------------>
					@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
		
				<!--	<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
							<h5 class="font-weight-bold mt-10 mb-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos de contacto</font></font></h5>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">teléfono de contacto</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
								<input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Teléfono">
							</div>
							<span class="form-text text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nunca compartiremos su correo electrónico con nadie más.</font></font></span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
								<input type="text" class="form-control form-control-lg form-control-solid" value="{{Auth::user()->email}}" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sitio de la compañía</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group input-group-lg input-group-solid">
								<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Nombre de usuario" value="loop">
								<div class="input-group-append"><span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.com</font></font></span></div>
							</div>
						</div>
					</div>
				</div>-->
				<!--end::Body-->

			<!--end::Form-->
		</div>
	</div>
	<!--end::Content-->
</div>

</div>
</body>
@endsection
@section('scripts')
    <script>
        var avatar2 = new KTImageInput('kt_img');
    </script>
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript')}}"></script>
@endsection