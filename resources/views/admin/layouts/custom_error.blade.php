@if(session('success'))
<script>
    iziToast.show({
        icon: 'fas fa-check-circle',
        iconColor: '#28a745',
        color: 'green',
        position: 'topRight',
        message: '{{ session('success') }}',
        timeout: 2500,
    });
</script>
@endif

@if($errors->any())
<script>
    iziToast.show({
        icon: 'fas fa-times-circle',
        iconColor: '#dc3545',
        color: 'red',
        position: 'topRight',
        message: '{{ $errors->first() }}',
        timeout: 2500,
        displayMode: 'replace',
    });
</script>
@endif
