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
                        <li class="active"><i class="fa fa-puzzle-piece"></i><li>
                    </ol>
                </div>
            </div>
        </div>
    </div> 
     
@endsection

@section('content')
<div class="content mt-3">
                
        <div class="animated fadeIn">

            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>List Pengunjung</strong>
                    </div>
                        <!--<div class="pull-right">
                        <a href="{{ url('add_pengunjung')}}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                        
                    </div>
                </div>-->
        <div class="card-body table-responsive"> 
           <table class="table table-bordered">
                <thead>
                    <tr>
                    
                    <th> ID </th>
                    <th> Nama </th>
                    <th> Tanggal </th>
                    <th> Asal </th>
                    <th> Tujuan </th>
                    <th> Email </th>
                    <th> No Hp </th>
                    <th>  </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($pengunjung as $item)
                        <tr>
                        
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->asal }}</td>
                        <td>{{ $item->tujuan}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->no_hp}}</td>
                        <td class="text-center">
                            <a href="{{ url('edit_pengunjung' .$item ->id)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action ="{{ url('pengunjung/' .$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    showing
                    {{$pengunjung->firstItem()}}
                    of
                    {{$pengunjung->lastItem()}}
                </div>
                <div class="pull-right">
                {{ $pengunjung->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
