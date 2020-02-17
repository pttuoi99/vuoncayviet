<!-- Bootstrap core JavaScript-->
<script src="assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="assets/admin/js/sb-admin-2.min.js"></script>
<script src="assets/admin/js/ajax.js"></script>
<script src="assets/admin/js/toastr.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'demo' );
</script>
@if(session('thongbao'))
	<script type="text/JavaScript">
		toastr.success('{{ session("thongbao") }}', 'Thông báo', {timeOut: 5000});
	</script>
@endif
@if(session('error'))
	<script type="text/JavaScript">
		toastr.error('{{ session("error") }}', 'Thông báo', {timeOut: 5000});
	</script>
@endif
