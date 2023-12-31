@extends('layout.master')

@section('title')
    {{ __('E-Commerce') }}
@endsection

@section('page_title')
    {{ __('controll_panel') }}
@endsection
@section('sub_main')
    {{ __('home') }}
@endsection
@section('sub_title')
    {{ __('product') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" container ">
        <!--begin::Advance Table Widget 3-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">{{ __('product') }}</span>
                </h3>
                <div class="card-toolbar">
                    <a class="btn btn-success font-weight-bolder font-size-sm" data-toggle="modal" data-target="#createModal">
                        <span class="svg-icon svg-icon-md svg-icon-white">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-product.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path
                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path
                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                        fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        {{ __('Create') }}</a>

                    <div class="modal fade " id="createModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width: 800px; margin-right:30%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Create product') }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ route('product.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- 1 name --}}
                                                <div class="form-group ">
                                                    <label>{{ __('name') }}</label>
                                                    <div class="input-group">
                                                        <input class="@error('name') is-invalid @enderror form-control"
                                                            type="text" name="name" id="name"
                                                            value="{{ old('name') }}" />
                                                    </div>
                                                    @error('name')
                                                        <span class="text-sm text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                {{-- 2 price --}}
                                                <div class="form-group ">
                                                    <label>{{ __('price') }}</label>
                                                    <div class="input-group">
                                                        <input class="@error('price') is-invalid @enderror form-control"
                                                            type="text" name="price" id="price"
                                                            value="{{ old('price') }}" />
                                                    </div>
                                                    @error('price')
                                                        <span class="text-sm text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                {{-- 3 category --}}
                                                <div class="form-group ">
                                                    <label>{{ __('category') }}</label>
                                                    <div class="input-group">
                                                        <select name="category_id" id="category_id"
                                                            value="{{ old('category_id') }}"
                                                            class="@error('category_id') is-invalid @enderror form-control">
                                                            <option value="">{{ __('choose') }}</option>

                                                            @foreach ($categories as $category)
                                                                <option
                                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                                    value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>

                                                {{-- 4 image --}}
                                                <div class="form-group ">
                                                    <label>{{ __('image') }}</label>
                                                    <div class="input-group">
                                                        <input class="@error('image') is-invalid @enderror form-control"
                                                            type="file" name="image" id="image"
                                                            value="{{ old('image') }}" />
                                                    </div>
                                                    @error('image')
                                                        <span class="text-sm text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                {{-- 5 description --}}
                                                <div class="form-group ">
                                                    <label>{{ __('description') }}</label>
                                                    <div class="input-group">
                                                        <textarea cols="5" rows="5" value="{{ old('description') }}"
                                                            class="@error('description') is-invalid @enderror form-control" name="description" id="description">
                                                        </textarea>
                                                        @error('description')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                data-dismiss="modal">{{ __('Cancel') }}</button>
                                            <button type="submit"
                                                class="btn btn-primary font-weight-bold">{{ __('Save') }}</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-0 pb-3">
                <!--begin::Table-->
                <div class="table-responsive">
                    {{-- @can('index products') --}}

                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <thead>
                            <tr class="text-uppercase">
                                <th style="min-width: 10px">{{ __('id') }}</th>
                                <th style="min-width: 100px">{{ __('name') }}</th>
                                <th style="min-width: 100px">{{ __('category') }}</th>
                                <th style="min-width: 100px">{{ __('price') }}</th>
                                <th style="min-width: 100px">{{ __('image') }}</th>
                                <th style="min-width: 100px">{{ __('action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp

                            @forelse($products as $product)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href=" {{ asset('storage/' . $product->image) }}" target="_blank">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                    fill="currentColor"></path>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>

                                    <td class="pr-0 ">
                                        {{-- edit-update --}}
                                        {{-- @can('update products') --}}
                                        <a class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                            data-toggle="modal" data-target="#editModal{{ $product->id }}">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24">
                                                        </rect>
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) ">
                                                        </path>
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="modal fade " id="editModal{{ $product->id }}" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document"
                                                style="max-width: 800px; margin-right:30%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            {{ __('update product') }} - {{ $product->name }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="padding: 0">
                                                        <!--begin::Form-->
                                                        <form action="{{ route('product.update', $product->id) }}"
                                                            method="post" class="form" novalidate
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        {{-- 1 name --}}
                                                                        <div class="form-group ">
                                                                            <label>{{ __('name') }}</label>
                                                                            <div class="input-group">
                                                                                <input
                                                                                    class="@error('name') is-invalid @enderror form-control"
                                                                                    type="text" name="name"
                                                                                    id="name"
                                                                                    value="{{ old('name', $product->name) }}" />
                                                                            </div>
                                                                            @error('name')
                                                                                <span
                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>

                                                                        {{-- 2 price --}}
                                                                        <div class="form-group ">
                                                                            <label>{{ __('price') }}</label>
                                                                            <div class="input-group">
                                                                                <input
                                                                                    class="@error('price') is-invalid @enderror form-control"
                                                                                    type="text" name="price"
                                                                                    id="price"
                                                                                    value="{{ old('price', $product->price) }}" />
                                                                            </div>
                                                                            @error('price')
                                                                                <span
                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        {{-- 3 category --}}
                                                                        <div class="form-group ">
                                                                            <label>{{ __('category') }}</label>
                                                                            <div class="input-group">
                                                                                <select name="category_id"
                                                                                    id="category_id"
                                                                                    value="{{ old('category_id') }}"
                                                                                    class="@error('category_id') is-invalid @enderror form-control">
                                                                                    @foreach ($categories as $category)
                                                                                        <option value="">
                                                                                            {{ __('choose') }}</option>
                                                                                        <option
                                                                                            value="{{ $category->id }}"
                                                                                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                                                            {{ $category->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('category_id')
                                                                                    <span
                                                                                        class="text-sm text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>

                                                                        </div>

                                                                        {{-- 4 image --}}
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="image">{{ __('image') }}</label>
                                                                            <input
                                                                                class="@error('image') is-invalid @enderror form-control"
                                                                                type="file" name="image"
                                                                                id="image"
                                                                                value="{{ old('image', $product->image) }}"
                                                                                placeholder="{{ __('image') }}" />
                                                                            @error('image')
                                                                                <span
                                                                                    class="text-sm text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <a href=" {{ asset('storage/' . $product->image) }}"
                                                                            target="_blank">
                                                                            <svg width="50" height="50"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.3"
                                                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        {{-- 5 description --}}
                                                                        <div class="form-group ">
                                                                            <label>{{ __('description') }}</label>
                                                                            <div class="input-group">
                                                                                <textarea cols="5" rows="5" value=""
                                                                                    class="@error('description') is-invalid @enderror form-control" name="description" id="description">
                                                                                    {{ old('description', $product->description) }}
                                                                            </textarea>
                                                                                @error('description')
                                                                                    <span
                                                                                        class="text-sm text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-light-primary font-weight-bold"
                                                                    data-dismiss="modal">{{ __('Cancel') }}</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary font-weight-bold">{{ __('Save') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endcan --}}

                                        {{-- DELETE --}}
                                        {{-- @can('delete products') --}}
                                        <form class="d-inline-block" action="{{ route('product.destroy', $product) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-icon btn-light btn-hover-primary btn-sm" type="submit"
                                                onclick="return confirm('{{ __('delete_message') }}')">
                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24">
                                                            </rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span>
                                            </button>
                                        </form>
                                        {{-- @endcan --}}

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="p-4" colspan="4">
                                        {{ __('no_records') }}</td>
                                </tr>
                            @endforelse{{-- --}}
                        </tbody>
                    </table>
                    {{-- {{ $products->links() }} --}}
                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
                    {{-- @endcan --}}
                </div>
                <!--end::Table-->

            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 3-->
    </div>
@endsection

@section('scripts')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>

    <!--end::Page Scripts-->
@endsection
