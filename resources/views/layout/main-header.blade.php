<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <a href="{{ route('E-Commerce') }}" class="brand-logo">
                    <h4 style="margin-top: 10%">{{ __('E-Commerce') }}</h4>
                </a>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">

            <!--begin::User-->
            <div class="topbar-item">
                <div class="w-auto px-2 btn btn-icon btn-icon-mobile btn-clean d-flex align-items-center btn-lg"
                    id="kt_quick_user_toggle">
                    <span class="mr-1 text-muted font-weight-bold font-size-base d-none d-md-inline">Hi,</span>
                    <span
                        class="mr-3 text-dark-50 font-weight-bolder font-size-base d-none d-md-inline">{{ Auth::user()->name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">{{ Auth::user()->id }}</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
