<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<!--begin::Head-->

<head>
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('assets/css/pages/login/classic/login-5.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <title>{{ __('login') }}</title>
    @include('layout.head')
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url({{ asset('assets/bg/bg-2.jpg') }})">

                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{ asset('market/assets/img/logo.png') }}" class="max-h-50px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->

                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">{{ __('Welcome Back') }}</h3>
                        </div>
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required
                                    autofocus placeholder="{{ __('name') }}" autocomplete="off"
                                    class="form-control @error('name') is-invalid @enderror h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input placeholder="{{ __('Password') }}" name="password" id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                    required autocomplete="off" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group
                                    text-center mt-10">
                                <button type="submit" class="btn btn-pill btn-warning opacity-90 px-15 py-3">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->

                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    @include('layout.script')
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/custom/login/login-general.js') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
