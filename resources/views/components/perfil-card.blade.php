<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Wrapper-->
        <div class="d-flex justify-content-between flex-column pt-4 h-100">
            <!--begin::Container-->
            <div class="pb-5">
                <!--begin::Header-->
                <div class="d-flex flex-column flex-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                    <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                        <div class="symbol-label" style="background-image:url('{{ url(''.'/get-imagen/'. Auth::user()->foto.'') }}'"></div>
              
            </div>
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Username-->
                    <a href="{{route('perfil')}}" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{Auth::user()->name}}</a>
                    <!--end::Username-->

                    <!--begin::Info-->
                    @if(Auth::user()->plan == 3)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #46BCFD!important; text-shadow: 1px 1px 1px #036CA6;">P L A T I N U M</div>
                    @elseif(Auth::user()->plan == 2)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #FCCA01!important; text-shadow: 1px 1px 1px #FCD742;">G O L D</div>
                    @elseif(Auth::user()->plan == 1)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #25E701!important; text-shadow: 1px 1px 1px #A6FE95;">GRATUITO</div>
                    @elseif(Auth::user()->plan == 4)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #FCCA01!important; text-shadow: 1px 1px 1px #FCD742;">G O L D</div>
                    @elseif(Auth::user()->plan == 5)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #46BCFD!important; text-shadow: 1px 1px 1px #036CA6;">P L A T I N U M</div>
                    @elseif(Auth::user()->plan == 6)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #46BCFD!important; text-shadow: 1px 1px 1px #036CA6;">P L A T I N U M</div>
                    @elseif(Auth::user()->plan == 7)
                    <div class="font-weight-bold text-dark-50 font-size-sm pb-6" style="font-size: 1.1rem;color: #25E701!important; text-shadow: 1px 1px 1px #A6FE95;">EMPRESA</div>
                    @endif
                    <!--end::Info-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="pt-1">
                    <!--begin::Text-->
                    <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">
                    Empresario mexicano y líder en redes sociales quien actualmente se desempeña como Director de Alianzas.
                    </p>
                    <!--end::Text-->

                    <!--begin::Item-->
                   
                    <!--end::Item-->

                    <!--begin::Item-->
                  
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="d-flex align-items-center pb-9">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45 symbol-light mr-4">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-2x svg-icon-dark-50"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Text-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">World Trade</a>
                            <span class="text-muted font-weight-bold">Siguiendo y seguidores</span>
                        </div>
                        <!--end::Text-->

                        <!--begin::label-->
                        <span class="font-weight-bolder label label-xl label-light-info label-inline py-5 min-w-45px">23</span>
                        <!--end::label-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--eng::Container-->

            <!--begin::Footer
            <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" data-toggle="modal" data-target="#kt_chat_modal">Escribe un Artículo</button>
            </div>-->
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->
</div>