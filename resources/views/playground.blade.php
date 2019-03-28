@extends('layouts.app')

@section('title', 'Daftar Komunitas')

@section('style')

@endsection()

@section('sidebar')
@parent

@include('layouts.sidebar')
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title">Title Page</h3>
            </div>
        </div>
    </div>
    <!-- ENDING: Subheader -->

    <div class=m-content">
        <div class="row m-row--no-padding m-row--col-separator-xl">
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                    <!-- BEGIN: Head -->
                    <div class="m-portlet__head m-portlet__head--fit bg-warning">
                        <h3> This Head</h3>
                    </div>
                    <!-- ENDING: Head -->

                    <!-- BEGIN: Body -->
                    <div class="m-portlet__body">
                        <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides">
                            <div class="m-widget19">
                                <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides">
                                    <img src="../assets/blog1.jpg" alt="" class="img-fluid">
                                    <h3 class="m-widget19__title m--font-light"> this Body</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ending: Body -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection
