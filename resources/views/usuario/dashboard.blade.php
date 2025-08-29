@extends('plantilla')
@section('contenido')


<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 text-center  bg-primary text-white rounded p-4 mb-2">
            <div class="row justify-content-center d-flex align-items-center">

                <div class="col-12 col-sm-12 col-md-9 col-lg-11 ">
                    <h1 class="fw-bold">  Nuevo pedido de tinta</h1>
                </div>
     
                <div class="col-12 col-sm-12 col-md-2 col-lg-1 text-center">

                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user fa-2x"></i>
                    </button>
                    <ul class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton1">
                        <li class="menu p-3">
                            <span>
                                <h5>{{Auth::User()->name}}</h5>    
                            </span>
                        </li>

                        <li class="menu p-3">
                            <span>
                                {{Auth::user()->puesto}}
                            </span>
                        </li>

                        <li class="menu p-3">
                            <span>
                                {{Auth::user()->email}}
                            </span>
                        </li>

                        <li class="mt-2  p-0">
                            <form action="{{route('logout_user')}}" method="POST">
                            @csrf @method('POST')
                                <a href="#" onclick="this.closest('form').submit()" class=" menu p-3 w-100">
                                    <i class="fa fa-xmark-circle text-danger"></i>
                                    Salir
                                </a>
                            </form>
                        </li>
                    </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>




<div class="row align-items-center d-flex">

        <form action="{{route('usuario.pedido')}}" enctype="multipart/form-data" method="POST" id="tintas">
            @csrf @method('POST')

        <div class="col-12 mb-1 bg-white shadow-sm pt-4">
            <div class="row justify-content-center p-3">

                <div class="col-6 col-sm-6 col-md-4 col-lg-2 text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input p-3" name="negra" id="negra" > <br>
                        <label class="custom-control-label" for="negra"> <b> Negra </b></label>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="amarilla" id="amarilla" > <br>
                        <label class="custom-control-label" for="amarilla"><b>Amarilla</b></label>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="azul" id="azul" > <br>
                        <label class="custom-control-label" for="azul"><b>Azul</b></label>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-2  text-center">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" name="rosa" id="rosa" > <br>
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
        

            <div class="row justify-content-center d-flex align-items-center">
                
                <div class="col-12 col-sm-12 col-md-8 col-lg-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-7  p-4 ">
                            <img src="img/544.jpg" class="img-fluid " style="width: 200px; height: 220px;" id="img_tag" alt="">
                        </div>

                        <div class="col-12 col-sm-12 col-md-10 col-lg-7  m-3 mt-sm-5">
                            <label for="" class="h4">Número de tinta</label>
                            <select class="form-select" name="numero_tinta" id="numero_tinta" aria-label="Default select example">
                                <option value="544">544</option>
                                <option value="504">504</option>
                                <option value="664">664</option>
                            </select>       
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-8 col-lg-4">
                    <div class="row d-flex align-items-center">

                        <div class="col-12 col-sm-12 col-md-4 col-lg-12 text-center shadow-sm p-4" id="preview" >
                            <img src="img/tanques.png" class="img-fluid" style="width: 200px; height: 200px;" id="foto"  alt="Foto de los tanquesitos">
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-4 col-lg-12 mt-5 ">
                            <label for="" class="h4">Cargar foto de los tanques de tinta</label>
                            <input accept="image/png,image/jpeg,image/bmp,image/svg,image/jpg" name="foto_tanques" type="file" id="foto_tanques" class="form-control" required>
                        </div>

                    </div>
                </div>




                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary btn-lg w-100 w-lg-50 mt-5" type="submit" id="enviar">
                        <i class="fa fa-paper-plane"></i>
                        Enviar pedido de tintas
                    </button>
                </div>

            </div>
            </form>




        </div>


            </div>


@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
//codigo del envio de correo con EmailJS
(function(){
    emailjs.init('mvA2hTi9RX5iDG6Ry');
})();


//ecuchamos el evento y lo detenemos
document.getElementById('tintas').addEventListener('submit', function(e){



    e.preventDefault();

     const checkboxes = ['negra', 'amarilla', 'azul', 'rosa'];
     let seleccionados = [];


    checkboxes.forEach(name => {

        const checkbox = document.getElementById(name);

        if(checkbox && checkbox.checked){
            seleccionados.push(name.charAt(0).toUpperCase() + name.slice(1));
        }

    });

    const numeroTinta = document.getElementById('numero_tinta').value;
    const userName = "{{Auth::user()->name}}";
    const userDept = "{{Auth::user()->puesto}}"
    const userEmail = "{{Auth::user()->email}}"

    console.log(numeroTinta)


    const templateParametros = {

        numero_tinta: numeroTinta,
        user_name: userName,
        user_dept: userDept,
        user_email: userEmail,
        selected_colors: seleccionados.join(', '),
        to_email: "arturo.resendiz@grupopabsa.com",
        cc_email: userEmail


    };



    emailjs.send('service_qcc7wza', 'template_9mc060d', templateParametros)
        .then(function(response){

            e.target.submit();


        }, function(error){
            console.error('Error al enviar el pedido: ', error);
        }




    );


});

</script>


@endsection



