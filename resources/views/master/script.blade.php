
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script type="text/javascript">
    function convertToRupiah (objek) {


 if(objek.value==0){
    objek.value='';
 }else{
 var value = objek.value;
 value = value.replace(/^(0*)/,"");
 objek.value=value;

 separator = ".";
 a = objek.value;
 b = a.replace(/[^\d]/g, "");
 c = "";
 panjang = b.length;
 j = 0; for (i = panjang; i > 0; i--) {
     j = j + 1; if (((j % 3) == 1) && (j != 1)) {
         c = b.substr(i-1,1) + separator + c; } else {
             c = b.substr(i-1,1) + c; } } objek.value = c;
 }

}
</script>