@extends('plantilla')
@section('contenido')
@include('admin.navegacion')   
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 p-2 shadow-sm text-center rounded-pill bg-primary text-white">
            <h3>Pendientes por entregar</h3>
        </div>

@forelse ($pedidos as $pedido)           
        <div class="col-6 mt-5 shadow-sm bg-white p-4">
            <div class="row p-4">

                <div class="col-12 border p-3">
                    <h5 class="text-center">{{$pedido->name}}</h5>
                    <h6 class="text-center">{{$pedido->puesto}}</h6>
                    <h6 class="text-center">Planta 1</h6>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h6 class="text-center"> <b> Requisición : </b> {{$pedido->created_at}}</h6>
                            <h5 class="text-center">Tintas requeridas</h5>
                        </div>

                        @if ($pedido->azul)
                            <div class="col-3 azul">
                                Azul {{$pedido->numero}}
                            </div>  
                        @endif

                        @if ($pedido->negra)
                            <div class="col-3 negra">
                                Negra {{$pedido->numero}}
                            </div>
                        @endif

                        @if ($pedido->amarilla)
                            <div class="col-3 amarilla">
                                Amarilla {{$pedido->numero}}
                            </div>
                        @endif

                        @if ($pedido->rosa)
                            <div class="col-3 rosa">
                                Rosa {{$pedido->numero}}
                            </div>
                        @endif

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 text-center p-5">
                            <img src="{{asset(Storage::url($pedido->foto_tanques))}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="img-fluid" alt="">
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
                   
                        <img src="{{asset(Storage::url($pedido->foto_tanques))}}"  alt="">
                    
                    
                </div>
            </div>
        </div>
        <!-- Modal -->
        </div>

@empty
           
<li class="h4 text-danger bg-white p-5">Sin entregas pendientes</li>
@endforelse




    </div>
</div>
@endsection