@extends('layouts.master')
@section('active-punishment')
    active
@stop

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                {{ session('success') }}
        </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                {{ session('delete') }}
        </div>
        @endif
<h3 class="page-title">Dashboard Kesiswaan</h3>
			<div class="row">
				<div class="col-md-12">
				 <!-- BASIC TABLE -->
					<div class="panel">
						<div class="panel-heading">
						 <h3 class="panel-title">Halaman Punishment</h3>
						</div>
						<div class="panel-body text-right">
                         <button  type="button" class="fa fa-plus-square btn-sm btn-primary" data-toggle="modal" data-target="#modelId">

                         </button>
                        </div>
                         <div class="table-responsive">
                          <br/>
                          <table id="myTable" class="table table-striped">
						     <thead>
							 	<tr>
                                 <th>No</th>
								  <th>Nis</th>
								  <th>Nama</th>
					 			  <th>Rombel</th>
                                  <th>Rayon</th>
                                  <th>Punishment</th>
                                  <th>Point</th>
                                  <th>Tanggal</th>
                                  <th>Saksi</th>
                                  <th>Aksi</th>
								</tr>
							 </thead>
                             <tbody>
                              @php
                                $no = 1;
                              @endphp
                             @foreach($punishment as $row)
                            <tr>
                                <td> {{ $no++ }}</td>
                                <td>{{ $row->nis}}</td>
                                <td>{{ $row->nama}}</td>
                                <td>{{ $row->rombel}}</td>
                                <td>{{ $row->rayon}}</td>
                                <td>{{ $row->punishment}}</td>
                                <td>{{ $row->point}}</td>
                                <td>{{ $row->tanggal}}</td>
                                <td>{{ $row->saksi}}</td>
                                <form action="{{ route('punishment.kesiswaan.hapus', $row->id) }}" method="post">
                                @csrf
                                <td><button class="fa fa-trash btn-danger" onclick="return confirm('Are you sure?')"></button></td>
                                </form>
                            </tr>
                             @endforeach
                             </tbody>
							 </table>
							<!-- END BASIC TABLE -->
						</div>
                         <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                     <h5 class="modal-title">Tambah Punishment</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>

                                    <div class="modal-body">
                                    <form action="{{ url('/kesiswaan/tambah') }}" method="POST">
                                              @csrf
                                           <div class="form-group">
                                             <label for="">Nis</label>

                                              <input type="text" name="nis" id="datasiswa" value=""class="form-control">

                                             @if($errors->has('nis'))
                                               <div class="text-danger">
                                                 {{ $errors->first('nis')}}
                                               </div>
                                             @endif
                                             </div>

                                               <div class="form-group">
                                                     <label for="">Nama</label>
                                                     <select name="nama" id="nama" class="form-control form-control-alternative">

                                                        <!-- <option value="">Pilih Siswa</option> -->

                                                    </select>
                                                     @if($errors->has('nama'))
                                                    <div class="text-danger">
                                                     {{ $errors->first('nama')}}
                                                    </div>
                                                     @endif
                                                </div>

                                                <div class="form-group">
                                                      <label for="">Rombel</label>
                                                      <select name="rombel" id="rombel" class="form-control form-control-alternative">

                                                        <!-- <option value="">Pilih Rombel</option> -->

                                                    </select>
                                                       @if($errors->has('rombel'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('rombel')}}
                                                    </div>
                                                       @endif
                                                </div>

                                                 <div class="form-group">
                                                     <label for="">Rayon</label>
                                                     <select name="rayon" id="rayon" class="form-control form-control-alternative">

                                                        <!-- <option value="">Pilih Rayon</option> -->

                                                    </select>
                                                      @if($errors->has('rayon'))
                                                    <div class="text-danger">
                                                      {{ $errors->first('rayon')}}
                                                    </div>
                                                      @endif
                                                 </div>

                                                 <div class="form-group">
                                             <label for="">Punishment</label>

                                              <select type="text" name="punishment" id="datapunishment" value=""class="form-control">
                                                <option> </option>
                                                <option>P1.1 - Merokok</option>
                                                <option>P2.2 - Mencuri</option>
                                              </select>
                                             @if($errors->has('punishment'))
                                               <div class="text-danger">
                                                 {{ $errors->first('punishment')}}
                                               </div>
                                             @endif
                                             </div>

                                                <div class="form-group">
                                                      <label for="">Point</label>
                                                      <select type="text" name="point" id="point" class="form-control">

                                                      </select>
                                                      @if($errors->has('point'))
                                                   <div class="text-danger">
                                                      {{ $errors->first('point')}}
                                                   </div>
                                                      @endif
                                                </div>

                                                <div class="form-group">
                                                      <label for="">Tanggal</label>
                                                      <input type="date" name="tanggal" class="form-control">
                                                      @if($errors->has('tanggal'))
                                                   <div class="text-danger">
                                                      {{ $errors->first('tanggal')}}
                                                   </div>
                                                      @endif
                                                </div>

                                                <div class="form-group">
                                                      <label for="">Saksi</label>
                                                      <input type="text" name="saksi" class="form-control">
                                                      @if($errors->has('saksi'))
                                                   <div class="text-danger">
                                                      {{ $errors->first('saksi')}}
                                                   </div>
                                                      @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('content1')
             @if(session('sukses')  )
              <div class="alert alert-succes" role="alert">
                {{session('sukses')}}
             @endif </div>

@section('customJs')
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
        paging: false
    });

    $('#myTable_wrapper .row .col-md-6').removeClass()
    $('#myTable_filter').addClass('float-right')

} );
</script>
<script>

$(document).ready(function(){

    $("#datasiswa").on("change",function(e){
        var thisId = $(this).val();

        $.ajax({
            url : "{{ url('getUnits') }}/" +thisId,
            dataType : 'json',
            type : 'get',
            beforeSend : function(e){
                $("#nama option").first().html('Sedang memuat data satuan...');
                $("#nama option,#district_id option").not(":first-child").remove();
            },
            success : function(response){
                console.log(response)
                $("#nama").html($(""))
                $.each(response.results,function(e,i){
                    $("#nama").append($("<option value='"+i.nama+"'>"+i.nama+"</option>"))
                })
            }
        })

        $.ajax({
            url : "{{ url('getUnits') }}/" +thisId,
            dataType : 'json',
            type : 'get',
            beforeSend : function(e){
                $("#rombel option").first().html('Sedang memuat data satuan...');
                $("#rombel option,#district_id option").not(":first-child").remove();
            },
            success : function(response){
                console.log(response)
                $("#rombel").html($(""))
                $.each(response.results,function(e,i){
                    $("#rombel").append($("<option value='"+i.rombel+"'>"+i.rombel+"</option>"))
                })
            }
        })

        $.ajax({
            url : "{{ url('getUnits') }}/" +thisId,
            dataType : 'json',
            type : 'get',
            beforeSend : function(e){
                $("#rayon option").first().html('Sedang memuat data satuan...');
                $("#rayon option,#district_id option").not(":first-child").remove();
            },
            success : function(response){
                console.log(response)
                $("#rayon").html($(""))
                $.each(response.results,function(e,i){
                    $("#rayon").append($("<option value='"+i.rayon+"'>"+i.rayon+"</option>"))
                })
            }
        })
    });
});

</script>

<script>

$(document).ready(function(){

    $("#datapunishment").on("change",function(e){
        var thisId = $(this).val();

        $.ajax({
            url : "{{ url('getPunishment') }}/" +thisId,
            dataType : 'json',
            type : 'get',
            beforeSend : function(e){
                $("#point option").first().html('Sedang memuat data satuan...');
                $("#point option,#district_id option").not(":first-child").remove();
            },
            success : function(response){
                console.log(response)
                $("#point").html($(""))
                $.each(response.results,function(e,i){
                    $("#point").append($("<option value='"+i.point+"'>"+i.point+"</option>"))
                })
            }
        })
    });
});

</script>
@endsection
