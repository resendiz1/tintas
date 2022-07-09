@extends('plantilla')
@section('contenido')
@include('admin.navegacion')   
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 p-3 shadow-sm bg-white text-center">
            <h1>Pendientes por entregar</h1>
        </div>
        <div class="col-12 mt-5 shadow-sm bg-white p-4">
            <div class="row p-4">
                <div class="col-6 border p-3">
                    <h5 class="text-center">{{Auth::Admini()->name}}</h5>
                    
                    <h6 class="text-center">Encargado de sistemas</h6>
                    <h6 class="text-center">Planta 1</h6>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="text-center"> <b> Requisición : </b> 20 de Junio de 2022</h6>
                            <h5 class="text-center">Tintas requeridas</h5>
                        </div>
                        <div class="col-3 azul">
                            Azul 544
                        </div>
                        <div class="col-3 negra">
                            Negra 544
                        </div>
                        <div class="col-3 amarilla">
                            Amarilla 544
                        </div>
                        <div class="col-3 rosa">
                            Rosa 544
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJVK7vVnyx2O6FfXHQkM0CutC9z-C-wiA-gQ&usqp=CAU" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 mt-5 text-center">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-thumbs-up"></i>
                                Pedido surtido
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title px-0" id="staticBackdropLabel">Tanques</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    <div class="modal-body text-center p-0">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJVK7vVnyx2O6FfXHQkM0CutC9z-C-wiA-gQ&usqp=CAU"  alt="">
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Modal -->
        </div>
    </div>
</div>
@endsection