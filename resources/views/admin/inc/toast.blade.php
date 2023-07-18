@if(session('success') || session('error') || session('warning'))
    <script>
        Toastify({
            text: "{{ session('success')?session('success'):(session('error')?session('error'):(session('warning')?session('warning'):'')) }}",
            duration: 4500,
            gravity: "top",
            position: 'right',
            className: "{{ session('success')?'alert alert-success':(session('error')?'alert alert-danger':(session('warning')?'alert alert-warning':'')) }}",
            stopOnFocus: true,
            close: true
        }).showToast();
    </script>
@endif