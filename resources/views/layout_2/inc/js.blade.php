<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin_/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin_/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin_/js/sb-admin-2.min.js')}}"></script>

<script>
    $('.confirm').click(function(){
        let form = $(this).closest('form');
        let name = $(this).data('name');

        event.preventDefault();
        Swal.fire({
            title:'Are you sure?',
            text:'You want be able to revert this!',
            icon:'warning',
            showCancelButton:true,
            confirmButtonClass:'mr-2',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText:'No, Cancel',
            reverseButton:true,
        }).then((result)=> {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('script-sweetalert')
