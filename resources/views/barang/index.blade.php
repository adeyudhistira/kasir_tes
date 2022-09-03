@section('content')
	<div class="container-fluid">
		<h1>
		<a href="{{route('tambah_barang')}}" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-arrow-right"></i>
			</span>
			<span class="text">Tambah</span>
		</a>
	</h1>
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Barang</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $item)
							<tr>
								<td>{{$item->nama_barang}}</td>
								<td>{{number_format($item->harga_satuan)}}</td>
							</tr>
							@endforeach
							

						</tbody>
					</table>
				</div>
			</div>
		</div>

</div>
@stop