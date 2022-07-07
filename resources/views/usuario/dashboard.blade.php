@extends('plantilla')
@section('contenido')



<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-12 text-center mt-3 mb-2 bg-primary text-white">
            <div class="row justify-content-center">
                <div class="col-4 text-start">
                    <button class="btn btn-danger btn-sm  mt-4">
                        <i class="fa fa-xmark-circle pt-1"></i>
                    </button>
                </div>
                <div class="col-4 text-center">
                    <h3>Nuevo pedido de tinta</h3>
                    <h4>{{Auth::User()->name}}</h4>
                    <h6>{{Auth::User()->puesto}}</h6>
                    <small>{{Auth::User()->email}}</small>
                </div>
                <div class="col-4"></div>
            </div>
        </div>

        <form action="{{route('usuario.pedido')}}" enctype="multipart/form-data" method="POST">
            @csrf @method('POST')

        <div class="col-12 mb-1 bg-white shadow-sm pt-4">
            <div class="row justify-content-center ">
                <div class="col-1">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="negra" id="negra" >
                        <label class="custom-control-label" for="negra"> <b> Negra </b></label>
                    </div>
                </div>
                <div class="col-1">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="amarilla" id="amarilla"  >
                        <label class="custom-control-label" for="amarilla"><b>Amarilla</b></label>
                    </div>
                </div>
                <div class="col-1">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="azul" id="azul" >
                        <label class="custom-control-label" for="azul"><b>Azul</b></label>
                    </div>
                </div>
                <div class="col-1">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="rosa" id="rosa" >
                        <label class="custom-control-label" for="rosa"><b>Rosa</b></label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 p-5 m-3 bg-white shadow-sm">
            <div class="row justify-content-center">
                <div class="col-4 m-3">
                    <label for="">Número de tinta</label>
                    <select class="form-select" name="numero_tinta" aria-label="Default select example">
                        <option value="544">544</option>
                        <option value="504">504</option>
                        <option value="664">664</option>
                    </select>       
                </div>
                <div class="col-4 m-3">
                    <label for="">Cargar foto de los tanques de tinta</label>
                    <input type="file" name="foto_tanque" class="form-control" required>
                </div>
                <div class="col-4 text-center shadow-sm p-4">
                    <img src="https://1.bp.blogspot.com/-p0U83nYKKGU/UpKKwA1ybjI/AAAAAAAATAw/IcKmPxqgTgQ/s1600/impresora+canon+con+sistema+de+tinta+continua.jpg" class="img-fluid"  alt="">
                </div>
                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary">
                        <i class="fa fa-paper-plane"></i>
                        Enviar pedido de tintas
                    </button>
                </div>


            </form>


            </div>
        </div>
        
    </div>
</div>
@endsection




