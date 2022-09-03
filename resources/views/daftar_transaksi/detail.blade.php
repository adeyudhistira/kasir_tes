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
								<th>Barang</th>
								<th>Qty</th>
								<th>Harga</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $item)
							<tr>
								<td>{{$item->nama_barang}}</td>
								<td>{{number_format($item->jumlah)}}</td>
								<td>{{number_format($item->harga_satuan)}}</td>
								<td>{{number_format($item->jumlah*$item->harga_satuan)}}</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							@php
							$total=0;
							@endphp
							@foreach($data as $item)
							@php
							$total+=$item->jumlah*$item->harga_satuan;
							@endphp
							@endforeach
							<tr>
								<td colspan="3" style="text-align: center">Total</td>
								<td>
									{{number_format($total)}}
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

</div>
@stop