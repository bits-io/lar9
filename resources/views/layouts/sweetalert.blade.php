{{--
@if(session()->has('error'))
    <p class="alert alert-danger"> {{ session()->get('error') }}</p>
    <script type="text/javascript">
        $(function () {
            Swal()
        });
    </script>
@endif --}}

{{-- @foreach($errors->all() as $error)
    {{ $error }}
@endforeach --}}
