
@section('content')
<div class="content mt-3">
                
        <div class="animated fadeIn">
                        
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                            <strong>Edit Pengunjung</strong>
                    </div>
                
                <div class="pull-right">
                    <a href="{{ url('pengunjung/') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
                        
                    <div class="card-body"> 
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url($pengunjung->id) }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text"  name="nama" class="form-control" value="{{$pengunjung ->nama}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="{{$pengunjung ->tanggal}}" required>
                                </div>
                                <div class="form-group">
                                    <label> Asal </label>
                                    <input name="asal" class="form-control" value="{{$pengunjung ->asal}}" required>
                                </div>
                                <div class="form-group">
                                    <label> Tujuan </label>
                                    <input name="tujuan" class="form-control" value="{{$pengunjung ->tujuan}}" required>
                                </div>
                                <div class="form-group">
                                    <label> Email </label>
                                    <input name="email" class="form-control" value="{{$pengunjung ->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label> No Hp </label>
                                    <input name="no_hp" class="form-control" value="{{$pengunjung ->no_hp}}" required>
                                </div>



                                <button type="submit" class="btn btn-success btn-sm"> Save </button>
                            </form>    
                        </div>
                    </div>
        </div>
    </div>
</div>

@endsection