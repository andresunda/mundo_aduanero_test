<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>
              
        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{asset('media/logos/logop.png')}}">
    
        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Includable CSS --}}
        @yield('styles')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->
      
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{asset('css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css"/>        
        <!--end::Layout Themes-->
        <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    </head>

<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>
    @if (config('layout.page-loader.type') != '')
        @include('layout.partials._page-loader')
    @endif
<div id="kt_header" style="left: 0px; left: 0px; color: white!important;" class="colorb header  header-fixed " >
	<!--begin::Container-->
    <div  class=" 
     container-fluid  d-flex align-items-stretch justify-content-between">
		<!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
        <!--============begin::Header Menu============================================-->
            <a href="{{route('dash_board')}}">
                <img style="margin-top: .5rem;" src="{{asset('media/logos/logo.png')}}" class="max-h-70px" alt=""/>
            </a>
        <!--end::Header Menu-->
        </div>
            <!--menu centrado--->
        <x-menu-nav></x-menu-nav>
			<!--end::Header Menu Wrapper-->

		<!--begin::Topbar-->
		<div class="topbar">

		    <!--begin::Search-->
            <x-buscador-nav></x-buscador-nav>
		    <!--end::Search-->
    
            <!--begin::Chat-->
            <x-chat-nav></x-chat-nav>
			<!--end::Chat-->

		    <!--begin::User-->
		    <x-menu-hamburguesa></x-menu-hamburguesa>
		    <!--end::User-->
		</div>
		<!--end::Topbar-->
	</div>
	<!--end::Container-->
</div>
    <div style="margin-top: 8rem"></div>
        @section('contenido')

        @show
        <script>
        window.addEventListener('load',function(){
            let data = '';
            document.getElementById("texto").addEventListener("keyup", () => {

                if((document.getElementById("texto").value.length)>=1){
                    async function buscardor() {
                        let response = await fetch(`/nombres/buscador?texto=${document.getElementById("texto").value}`,{ method:'get' });
                        let res = await response.text();
                        //console.log(res);
                        return res;
                    }
                   
                    let html = buscardor().then(res => {
                        console.log(res);
                        data = res;
                        //return data
                    } );
                    console.log(data)
                    
                    document.getElementById("resultados").innerHTML = data;
                }else{
                    document.getElementById("resultados").innerHTML = ""
                }
                /*
              
                    fetch(`/nombres/buscador?texto=${document.getElementById("texto").value}`,{ method:'get' })
                .then((response) => {
                    //response.text(); 
                    console.log(response);
                })
                .then((html ) => {   
                    console.log(html);
                    document.getElementById("resultados").innerHTML = html;
                })
           
            */
        })
    });    
       </script>

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach

        {{-- Includable JS --}}
        @yield('scripts')

    </body>
</html>

