
@extends('layouts.admin')

@section('content')
<h1></h1>
<div id="app"></div>
<script src="/js/app.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    @if(session('message'))
        toastr.error("{{ session('message') }}");
    @endif
});   
</script>  
@endsection