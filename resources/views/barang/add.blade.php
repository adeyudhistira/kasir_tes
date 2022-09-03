@section('content')
	<div class="container-fluid">
	
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Tambah Barang</h6>
			</div>
			<div class="card-body">
				<form class="user" id="formSave">
					<div class="form-group">
						<input type="text" class="form-control form-control-user"
						id="nama" name="nama" >
					</div>
					<div class="form-group">
						<input type="text" onkeyup="convertToRupiah(this)" class="form-control form-control-user"
						id="harga" name="harga">
					</div>
				</form>
				<a href="#" onclick="insert_barang()" class="btn btn-primary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-arrow-right"></i>
					</span>
					<span class="text">Simpan</span>
				</a>
			</div>
		</div>

</div>

<script type="text/javascript">
	function insert_barang() {
  var formData = document.getElementById("formSave");
  var objData = new FormData(formData);

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $.ajax({
      type: 'POST',
      url: '{{ route('insert_barang') }}',
      data: objData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
          // var response = JSON.parse(response);
          console.log(response);
          $("#loading").css('display', 'none');

          if(response.statusCode === 200) {
             window.location.href = '{{route('barang')}}';

          }
      }
         

  }).done(function (msg) {
      
  }).fail(function (msg) {
    
  });
}
</script>
@stop