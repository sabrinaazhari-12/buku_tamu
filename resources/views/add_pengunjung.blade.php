@extends('main')

@section ('title','dashboard')

@section('breadcrumbs')

    <div class="breadcrumbs">
        
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Pengunjung</h1>
                </div>
            </div>
        </div>    
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href=#> Pengunjung</a></li>
                        <li class="active">Add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> 
     
@endsection

@section('content')
<div class="content mt-3">
                
        <div class="animated fadeIn">
                        
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                            <strong>Tambah Pengunjung</strong>
                    </div>
                
                <div class="pull-right">
                    <a href="{{ url('pengunjung/')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
                        
                    <div class="card-body"> 
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('pengunjung')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label> Asal </label>
                                    <input name="asal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label> Tujuan </label>
                                    <input name="tujuan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label> Email </label>
                                    <input name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label> No Hp </label>
                                    <input name="no_hp" class="form-control" required>
                                </div>



                                <button type="submit" class="btn btn-success btn-sm"> Save </button>
                            </form>    
                        </div>
                    </div>
        </div>
    </div>
</div>

@endsection