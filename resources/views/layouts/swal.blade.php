@if(Session::has('success'))
    <script type="text/javascript">
    swal({
        icon: 'success',
        text: '{{Session::get("success")}}',
        button: false,
        timer: 1500
    });
    </script>
    <?php
        Session::forget('success');
    ?>
@endif
@if(Session::has('gagal'))
    <script type="text/javascript">
    swal({
        icon: 'warning',
        title: 'Oops !',
        button: false,
        text: '{{Session::get("gagal")}}',
        timer: 1500
    });
    </script>
    <?php
        Session::forget('gagal');
    ?>
@endif
@if(Session::has('error'))
    <script type="text/javascript">
    swal({
        icon: 'error',
        title: 'Oops !',
        button: false,
        text: '{{Session::get("error")}}',
        timer: 1500
    });
    </script>
    <?php
        Session::forget('error');
    ?>
@endif
<script>
    function alertdelete(id, url){
        swal({
          title: "",
          text: "Apakah anda yakin akan hapus data ini?",
          icon: "warning",
          buttons: ['Cancel', 'OK'],
      }).then((willDelete) => {
          if (willDelete) {
            $.post(url,{ 
                id:id,
                _token:"{{ csrf_token() }}"
            },function(data){
                location.reload();
            })
          } else {
            return false;
          }
      });
    }
</script>
