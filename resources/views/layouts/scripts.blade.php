<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>

<!-- Input Mask -->
<script src="{{asset('vendor/inputmask/jquery.inputmask.bundle.js')}}"></script>

<script type="text/javascript"> 

    $('.numeric').inputmask({
        alias:"numeric",
        digits:0,
        repeat:20,
        digitsOptional:false,
        decimalProtect:true,
        groupSeparator:".",
        placeholder: '0',
        radixPoint:",",
        radixFocus:true,
        autoGroup:true,
        autoUnmask:false,
        clearMaskOnLostFocus: false,
        onBeforeMask: function (value, opts) {
            return value;
        },
        removeMaskOnSubmit:true
    });

    function destroy(id, url){
        alertdelete(id, url);
    }
    
</script>