@section('content')
	<div class="container-fluid">
		

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
								<th>No</th>
								<th>Tanggal</th>
								<th>Total</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no=0;
							@endphp
							@foreach($data as $item)
							@php
							$no++;
							@endphp
							<tr>
								<td>{{$no}}</td>
								<td>{{date('d M Y',strtotime($item->created_at))}}</td>
								<td>{{number_format($item->total_harga)}}</td>
								<td>
									<a href="#" onclick="detail({{$item->id}})" class="btn btn-primary btn-icon-split">
										<span class="text">Detail</span>
									</a>
								</td>
							</tr>
							@endforeach
							

						</tbody>
					</table>
				</div>
			</div>
		</div>

</div>
<script type="text/javascript">
	function detail(id) {
		window.location.href = '{{route('detail')}}?id='+id;
	}
</script>
@stop