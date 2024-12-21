{{-- Extends layout --}}
@extends('layout.default')

@section('contenido')
    

<div style="text-align: center;" class="content d-flex flex-column flex-column-fluid" id="kt_content">
<div class="d-flex flex-row">
    <!--begin::Aside-->
    <x-perfil></x-perfil>
	<!--end::Aside-->
	<!--begin::Content-->
	<div class="flex-row-fluid ml-lg-8">
		<!--begin::Card-->
		<div class="card card-custom card-stretch">
			<!--begin::Header-->
			<div class="card-header py-3">
				<div class="card-title align-items-start flex-column">
					<h3 class="card-label font-weight-bolder text-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cambiar Contraseña</font></font></h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualice su contraseña</font></font></span>
                </div>
                <!--AQUI ABRE FORMULARIO PARA ACTUALIZAR CAMBIOS-->
                <form action="{{route('change_password')}}" method="POST">
                @csrf
				<div class="card-toolbar">
				<button type="submit" class="btn btn-success mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar cambios</font></font></button>
				
				</div>
			</div>
			<!--end::Header-->

			<!--begin::Form-->
				<!--begin::Body-->
				<div class="card-body">
					<div class="row">
						<label class="col-xl-3"></label>
						<div class="col-lg-9 col-xl-6">
						</div>
                    </div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actual contraseña</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="password" name="password" placeholder="Anterior contraseña">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nueva Contraseña</font></font></label>
						<div class="col-lg-9 col-xl-6">
							<input class="form-control form-control-lg form-control-solid" type="text-danger" name="passwordNueva" placeholder="Contraseña nueva">
                        </div>
					</div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirmar contraseña</font></font></label>
                            <div class="col-lg-9 col-xl-6">
                                <input class="form-control form-control-lg form-control-solid" type="password" name="passwordConfirmacion" placeholder="Confirmacion de contraseña">
                            </div>
                    </form>
      
                <!--AQUI CIERRA FORMULARIO DE DATOS PARA GUARDAR CAMBIOS-->
					</div>
					</div>
					
					
				<!--end::Body-->
	
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