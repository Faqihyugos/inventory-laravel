<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon" />
    @vite('resources/css/app.css')
</head>

<body style="font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;">
    @include('layouts.web.partials.navbar')
    <div class="mb-20">
        @yield('content')
        @include('sweetalert::alert')
    </div>
    @include('layouts.web.partials.footer')

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function deleteData(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Kamu yakin ingin mengeluarkan item ini ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, tolong keluarkan',
                cancelButtonText: 'Tidak',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Data kamu tetap aman',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>
</body>

</html>
