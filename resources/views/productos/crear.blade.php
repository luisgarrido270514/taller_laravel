@extends('productos.layaout')
@section('contenido')
<div class="conteiner">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('productos.store')}}" method="post">
                {{ csrf_field() }}
                <div class="label">nombre</div>
                <input class="form-control" type="text" name="nombre" id="">
                <div class="label">precio</div>
                <input class="form-control" type="text" name="precio" id="">
                <div class="label">empresa</div>
                <input class="form-control" type="text" name="empresa" id="">
                <input type="submit" value="enviar">

            </form>
        </div>
    </div>
</div>
@endsection
