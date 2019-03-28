@extends('layouts.app')

@section('title', 'Dashboard')

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

        <!--end:: Widgets/Stats-->

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title "><i class="fas fa-chart-bar fa-sm"></i>&nbsp;Dashboard</h3>
            </div>

        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        @include('dashboard.detlist')
        @include('dashboard.detlist')
        @include('dashboard.detlist')
        @include('dashboard.detlist')
        @include('dashboard.detlist')
    </div>

</div>
@endsection

@section('script')

@endsection

