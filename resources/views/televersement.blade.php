@extends('layouts.app')


@section('content')

<body>
<div class="container">
<div class="row">
<p> <B>Cette page va contenir des détails sur mon blog.</B></p>
<h2> Téléverser une image  </h2>
<form method = "POST" action = "{{ route('login') }}" enctype="multipart/form-data">
    @csrf
    <input type = "file" name= "photo">
    <input type = "submit" name= "Téléversser">

</form>



</div>
</div>
</body>

@endsection 