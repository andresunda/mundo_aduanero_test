<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Top-->
        <div class="d-flex align-items-center">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
                
            
                    <img width="100%" src="{{ url(''.'/get-imagen/'. Auth::user()->foto.'') }}" class="h-75 align-self-end" alt=""/>
            
            </div>
            <!--end::Symbol-->

            <!--begin::Description-->
            <span class="text-muted font-weight-bold font-size-lg"><textarea id="kt_forms_widget_3_input" class="form-control border-0 p-0 pr-10 resize-none" placeholder="¿Qué estás pensando?"></textarea>
</span>
            <!--end::Description-->
        </div>
        <!--end::Top-->

        <!--begin::Form-->
        <form id="kt_forms_widget_2_form" class="pt-10 ql-quil ql-quil-plain">
            <!--begin::Editor-->
            <div id="kt_forms_widget_2_editor"></div>
            <!--end::Editor-->

            <div class="border-top my-5"></div>

            <!--begin::Toolbar-->
            <div id="kt_forms_widget_2_editor_toolbar" class="ql-toolbar d-flex align-items-center justify-content-between">
                

                <div style="margin-left: 80%!important;" class="">
                    <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                        
                    </span>
                    <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                        <i class="far fa-paper-plane"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Body-->
</div>