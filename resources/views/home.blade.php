@extends('main')

@section ('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>    
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fa fa-dashboard"></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animate fadeIn">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent theme-toggle text-light">
                                <i class="fa fa-users fa-2x"></i>
                            </button>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">Pertahun</span>
                        </h4>
                        <p class="text-light">{{ $countPengunjung }}</p>
                        

                        <div class="chart-wrapper px-0" style="height:70px;">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent theme-toggle text-light">
                                <i class="fa fa-users fa-2x"></i>
                            </button>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">Perbulan</span>
                        </h4>
                        <p class="text-light"> {{ $countPengunjung }}</p>

                        <div class="chart-wrapper px-0" style="height:70px;">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
