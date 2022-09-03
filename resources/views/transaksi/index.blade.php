@section('content')
	<div class="container-fluid">
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
			</div>
			<div class="card-body">
				<form class="user" id="formSave">
					<input type="hidden" name="idtr" id="idtr">
					<div class="form-group">
						<select class="form-control" name="barang">
							<option value=""> Silahkan Pilih</option>
							@foreach($barang as $item)
							<option value="{{$item->id}}">{{$item->nama_barang}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<input type="number" class="form-control"
						id="qty" name="qty" value="1">
					</div>
				</form>
				<a href="#" onclick="add_transaksi()" class="btn btn-primary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-arrow-right"></i>
					</span>
					<span class="text">Tambah</span>
				</a>
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
							<tbody id="jadwalSimulasi">
							</tbody>
							<tfoot id="jadwalTotal">
							</tfoot>
					</table>
				</div>
			</div>
		</div>

</div>
<script type="text/javascript">
function add_transaksi() {
  var formData = document.getElementById("formSave");
  var objData = new FormData(formData);

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $.ajax({
      type: 'POST',
      url: '{{ route('add_transaksi') }}',
      data: objData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
          // var response = JSON.parse(response);
          console.log(response);
          $("#loading").css('display', 'none');

          if(response.statusCode === 200) {
            $(".table").show();
            $("#jadwalTotal").empty()
            $("#jadwalSimulasi").empty()
        	$("#idtr").val(response.result.idtr);
            var dataLength = response.result.data.length
            for(let i = 0; i < dataLength; i++) {
                $("#jadwalSimulasi").append(`<tr style="text-align: center">\
                    <td>`+response.result.data[i].barang+`</td>\
                    <td style="text-align: right">`+response.result.data[i].qty+`</td>\
                    <td style="text-align: right">`+response.result.data[i].harga+`</td>\
                    <td style="text-align: right">`+response.result.data[i].sub_total+`</td>\
                    
                </tr>`);
            }
             $("#jadwalTotal").append(`<tr style="text-align: center">\
            <td colspan="3" style="text-align: center">Total</td>
            <td style="text-align: right"><b>`+response.result.total+`</b></td>
            </tr>`);

          }
      }
         

  }).done(function (msg) {
      
  }).fail(function (msg) {
    
  });
}
</script>
@stop