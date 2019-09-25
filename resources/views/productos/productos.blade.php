@extends('productos.layaout')
@section('contenido')
<div class="container p4">
    <div class="row">
        <div class="col-md-6 col-6">
            <a class="btn btn-danger btn-sm" href="{{route('productos.create')}}">crear producto</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">producto</th>
                                <th scope="col">precio</th>
                                <th scope="col">empresa del producto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $ptn)
                            <tr>

                                <th scope="row">{{ $ptn->nombre}}</th>
                                <td>{{ $ptn->precio}}</td>
                                <td>{{ $ptn->empresa}}</td>

                            </tr>
                            @endforeach


                        </tbody>

                    </table>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
