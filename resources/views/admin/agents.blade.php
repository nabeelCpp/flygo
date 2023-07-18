@extends('layouts.admincp')

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $title??"" }}</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        @include('admin.inc.breadcrumbs')
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                        <!--end::Primary button-->
                    </div> --}}
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">{{$title??""}}</span>
                                <span class="text-muted mt-1 fw-semibold fs-7"></span>
                            </h3>
                           
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="agentsTable">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold text-muted">
                                            {{-- <th class="w-25px">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check">
                                                </div>
                                            </th> --}}
                                            <th class="min-w-140px">Company</th>
                                            <th class="min-w-140px">Representative</th>
                                            <th class="min-w-140px">Mobile</th>
                                            <th class="min-w-140px">Country</th>
                                            <th class="min-w-120px">Date</th>
                                            <th class="min-w-120px">Status</th>
                                            <th class="min-w-100px text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        @include('admin.inc.footer')
        <!--end::Footer-->
    </div>
    <div class="modal fade hide" id="kt_modal_create_app" tabindex="-1" aria-modal="true" role="dialog">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Status</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <form id="status_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('admin.agent.status') }}" novalidate="novalidate" id="kt_modal_create_app_form">
                        @csrf
                        <input type="hidden" name="id" id="agent_id" required>
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <div class="w-100 row">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container col-6">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">{{ __("Credit Limit")}}</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-kt-initialized="1"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" required class="form-control form-control-lg form-control-solid" name="credit_limit" id="credit_limit" placeholder="" value="" min="0" max="5000">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="fv-row mb-10 fv-plugins-icon-container col-6">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">{{ __("Service Charges") }}</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-kt-initialized="1"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="number" required class="form-control form-control-lg form-control-solid" name="service_charges" id="service_charges" placeholder="" value="" min="0">
                                        </div>
                                        <div class="col-4">
                                            <select name="service_charge_type" id="service_charge_type" class="form-control form-control-lg form-control-solid" required>
                                                <option value="percentage">%</option>
                                                <option value="SAR">SAR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                        <span class="required">Status</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Select your app category" data-kt-initialized="1"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin:Options-->
                                    <div class="fv-row fv-plugins-icon-container row">
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack mb-5 col-6 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">Pending</span>
                                                    <span class="fs-7 text-muted"></span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="status" value="0">
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack col-6 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <i class="fa fa-check"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">Approve</span>
                                                    <span class="fs-7 text-muted"></span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="status" value="1">
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                    <!--end:Options-->
                                </div>
                                <!--end::Input group-->
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success pull-right" value="Save">
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                        
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection
@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        $.ajax({
            url: '{{ route('admin.agents.post') }}',
            type: 'POST',
            dataType: 'json',
            success: function(res){
                let html = res.map(r=>{
                    return `<tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50px me-5">
                                            <span class="symbol-label bg-light">
                                                <img src="${baseUrl}/company/logos/${r.company_logo}" class="h-75 align-self-end" alt="">
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">${r.company_name}</a>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">Akama / NIC: ${r.akama??"-"}</span>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">Credit Limit: ${r.credit_limit.toFixed(2)??"-"}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-dark fw-bold text-hover-primary fs-6">
                                    Waqar Gill
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">Email: ${r.email??"-"}</span>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">Username: ${r.username??"-"}</span>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">${r.mobile??"-"}</a>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">Landline: ${r.landline??"-"}</span>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">${r.country??"-"}</a>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">City: ${r.city??"-"}</span>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">${r.created_at?new Date(r.created_at).toDateString():"-"}</a>
                                </td>
                                <td>
                                    <span class="badge badge-light-${r.status?'success':'danger'}">${r.status?'Approved':'Pending'}</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" onclick="populateStatusModal(this)" data-id="${r.id}" data-status="${r.status}" data-limit="${r.credit_limit.toFixed(2)}" data-charges="${r.service_charges.toFixed(2)}" data-type="${r.service_charge_type}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal"  data-bs-target="#kt_modal_create_app">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>`
                })
                $('#agentsTable').find('tbody').html(html);
            }
        })
        function populateStatusModal(element) {
            let form = $('#status_form');
            let id = $(element).data('id');
            let credit_limit = $(element).data('limit');
            let service_charges = $(element).data('charges');
            let service_charges_type = $(element).data('type');
            let status = $(element).data('status');
            form.find('#agent_id').val(id);
            form.find('[name="credit_limit"]').val(credit_limit);
            form.find('[name="service_charges"]').val(service_charges);
            form.find('[name="service_charge_type"]').val(service_charges_type);
            form.find('[name="status"][value="'+status+'"]').click();
        }

        $('#status_form').find('[type="submit"]').click(function(e){
            let form = $('#status_form');
            let required = form.find('[required]');
            let errors = 0;
            required.each(function(){
                if(!$(this).val()){
                    if(!$(this).hasClass('border')){
                        $(this).addClass('border');
                        $(this).addClass('border-danger');
                    }
                    errors++;
                }else{
                    if($(this).hasClass('border')){
                        $(this).removeClass('border');
                        $(this).removeClass('border-danger');
                    }
                }
            });
            if(errors){
                e.preventDefault();
            }
        })
    </script>
@endsection