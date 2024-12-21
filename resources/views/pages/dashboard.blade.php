{{-- Extends layout --}}
@extends('layout.default')



    <!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="../../../">
        <meta charset="utf-8"/>
        <title>Mundo Aduanero | Iniciar Sesión</title>
        <link rel="icon" type="image/png" href="{{asset('media/logos/logop.png')}}">
        {{Auth::logout()}}

        <meta name="description" content="Login page example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


                    <!--begin::Page Custom Styles(used by this page)-->
                             <link href="{{ asset('css/pages/login/login-2.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
                        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="{{ asset('plugins/global/plugins.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('css/style.bundle.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->

<link href="{{ asset('css/themes/layout/header/base/light.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/themes/layout/header/menu/light.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/themes/layout/brand/dark.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/themes/layout/aside/dark.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="{{asset('media/logos/logop.png')}}"/>
        
            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <!--begin::Aside-->
    <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
        <!--begin: Aside Container-->
        <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35" >
            <!--begin::Logo-->
            <a href="#" class="text-center pt-2" >
                <img src=" {{asset('media/logos/logop.png')}}" class="max-h-75px" alt=""/>
            </a>
            <!--end::Logo-->

            <!--begin::Aside body-->
            <div class="d-flex flex-column-fluid flex-column flex-center" >
                <!--begin::Signin-->
                <div class="login-form login-signin py-11"  >
                    <!--Iniciar Sesion-->
                   <div id="kt_login_signin_form">
                    <form class="form" novalidate="novalidate" action="{{route('login')}}" method="POST" id="inicio">
                    @csrf    
                        <!--begin::Title-->
                        <div class="text-center pb-8">
                            <h2  class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Bienvenido</h2>
                            <span class="text-muted font-weight-bold font-size-h4">¿Eres Nuevo? <a href="{{route('registro')}}" class="text-primary font-weight-bolder" >Crear Cuenta</a></span>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="email" autocomplete="off"/>
                            {!! $errors->first('email','<span style="color: red;" class="rederro help-bolck" >El email o la contraseña no coinciden con nuestros registros.</span>') !!}
               
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Contraseña</label>

                                <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">
                               ¿ Se te olvidó tu contraseña ?
            					</a>
                            </div>

                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off"/>
                            {!! $errors->first('password','<span class="rederro help-bolck">:message</span>') !!}
                        </div>
                        <!--end::Form group-->
        
                        <!--begin::Action-->
                        
                        <!--end::Action-->
                        
                        <div class="text-center pt-2">
                            <button id="inicio" class="btn btn-dark font-weight-bolder font-size-h6 px-8 py-4 my-3">Iniciar</button>
                        </div>
                    </form>
                   </div>
                    <!--end::Form-->
                </div> 
                <!--end::Signin-->

                <!--begin::Signup-->
                <div class="login-form login-signup pt-11">
                    <!--begin::Form-->
                    <div id="kt_login_signup_form">
                    <form class="form" novalidate="novalidate" action="{{route('register')}}" method="POST" id="register">
                        <!--begin::Title-->
                        @csrf
                        
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Regístrate</h2>
                            <p class="text-muted font-weight-bold font-size-h4">Ingrese sus datos para crear su cuenta</p>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Nombre completo" name="name" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Contraseña" name="password" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirmar contraseña" name="cpassword" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree"/>Acepto los <a href="#">Terminos y Condiciones </a>.
                                <span></span>
                            </label>
                        </div>
                        <!--end::Form group-->
                        
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                            <button type="submit" id="register" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Siguiente</button>
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancelar</button>
                        </div>
                        <!--end::Form group-->
                        
                    </form>
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->

                <!--begin::Forgot-->
                <div class="login-form login-forgot pt-11">
                    <!--begin::Form-->
                    <div id="kt_login_forgot_form">
                    <form class="form" novalidate="novalidate" action="{{route('register')}}" method="POST">
                        <!--begin::Title-->
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">¿Olvidaste tu contraseña ?</h2>
                            <p class="text-muted font-weight-bold font-size-h4">Ingrese su correo electrónico para restablecer su contraseña</p>
                        </div>
                        <!--end::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                            <button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Enviar</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancelar</button>
                        </div>
                        <!--end::Form group-->
                    </form>
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <!--end::Aside body-->

            <!--begin: Aside footer for desktop-->
            <div class="text-center">
                <button type="button" class="font-size-10px btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-h6">
                    <i class="fab fa-facebook-square"></i> Continuar con facebook
            </button>
            </div>
           



            <div class="text-center">
                <button type="button" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-h6">
                    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path: asset('media/svg/social-icons/google.svg--><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4"/>
    <path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853"/>
    <path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05"/>
    <path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335"/>
</svg><!--end::Svg Icon--></span>                   Entrar con google
                </button>
            </div>
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
    <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0 colorb">
        <!--begin::Title-->
        <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7" style="padding: 1rem!important;">
        <h2 class="display4 font-weight-bolder my-7 text-dark" style="color: #E7E7E7!important; margin: 0px!important;">World Trade</h2>
            <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #fff!important; font-size: 5rem!important;">Mundo Aduanero y Logístico</h3>
        <!--    <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                User Experience & Interface Design, Product Strategy<br/>
                Web Application SaaS Solutions
            </p>-->
        </div>
        <!--end::Title-->

        <!--begin::Image-->
        <div class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url( {{asset('media/svg/illustrations/login-visual-2.svg')}});"></div>
        <!--end::Image-->
    </div>
    <!--end::Content-->
</div>
<!--end::Login-->
	</div>
<!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#3699FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#E4E6EF",
                "dark": "#181C32"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1F0FF",
                "secondary": "#EBEDF3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#3F4254",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#EBEDF3",
            "gray-300": "#E4E6EF",
            "gray-400": "#D1D3E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#7E8299",
            "gray-700": "#5E6278",
            "gray-800": "#3F4254",
            "gray-900": "#181C32"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src=" {{asset('plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
		    	   <script src=" {{asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
		    	   <script src=" {{asset('js/scripts.bundle.js?v=7.0.6')}}"></script>
				<!--end::Global Theme Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                            <script src=" {{asset('js/pages/custom/login/login-general.js?v=7.0.6')}}"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>




@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript')}}"></script>
@endsection
