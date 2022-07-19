@extends('plantilla')
@section('contenido')


<div class="container">






    <div class="row mt-5 justify-content-center">
        <div class="col-12 col-sm-12 text-center mt-3  bg-primary text-white rounded">
            <div class="row justify-content-center">
                <div class="col-4"></div>

                <div class="col-12 text-center mt-3">
                    <h3> <u> Nuevo pedido de tinta </u></h3>
                    <h4>{{Auth::User()->name}}</h4>
                    <h6>{{Auth::User()->puesto}}</h6>
                    <small>{{Auth::User()->email}}</small>
                </div>
                <div class="col-4 text-center pb-4">
                    <form action="{{route('logout_user')}}" method="POST">
                     @csrf @method('POST')
                        <a href="#" onclick="this.closest('form').submit()" class="btn btn-danger btn-sm   p-1">
                            <i class="fa fa-xmark-circle pt-1"></i>
                            Salir
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>




<div class="row">

        <form action="{{route('usuario.pedido')}}" enctype="multipart/form-data" method="POST">
            @csrf @method('POST')

        <div class="col-12 mb-1 bg-white shadow-sm pt-4">
            <div class="row justify-content-center p-3">
                <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="negra" id="negra" >
                        <label class="custom-control-label" for="negra"> <b> Negra </b></label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="amarilla" id="amarilla"  >
                        <label class="custom-control-label" for="amarilla"><b>Amarilla</b></label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="azul" id="azul" >
                        <label class="custom-control-label" for="azul"><b>Azul</b></label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="rosa" id="rosa" >
                        <label class="custom-control-label" for="rosa"><b>Rosa</b></label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 p-5  bg-white shadow-sm">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 text-center">
                    @if (session('enviado'))
                        <div class="alert alert-success p-1">
                            <i class="fa fa-circle-check"></i>
                            {{session('enviado')}}
                        </div>
                    @endif
                </div>
            </div>
        

            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 p-4 ">
                    <img src="img/544.jpg" class="img-fluid" id="img_tag" alt="">
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-2 m-3 mt-sm-5">
                    <label for="" class="h4">Número de tinta</label>
                    <select class="form-select" name="numero_tinta" id="numero_tinta" aria-label="Default select example">
                        <option value="544">544</option>
                        <option value="504">504</option>
                        <option value="664">664</option>
                    </select>       
                </div>
   
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-5 ">
                    <label for="" class="h4">Cargar foto de los tanques de tinta</label>
                    
                    <input accept="image/png,image/jpeg,image/bmp,image/svg,image/jpg" name="foto_tanques" type="file" id="foto_tanques" class="form-control" required>
                   
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center shadow-sm p-4" id="preview" >
                    <img src="img/tanques.png" class="img-fluid" id="foto"  alt="Foto de los tanquesitos">
                </div>
                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary mt-5" id="enviar">
                        <i class="fa fa-paper-plane"></i>
                        Enviar pedido de tintas
                    </button>
                </div>

            </div>
            </form>




        </div>


            </div>


@endsection




