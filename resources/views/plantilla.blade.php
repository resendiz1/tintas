<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/icono.jpeg" type="image/x-icon">
   <style>
        body {
    
            background-image: url('img/background.jpg');
            background-position-x:center;
            background-position-y:center;
            height: 1000px;
     

 
        }
    </style>
    <title>Tintas</title>
</head>
<body>




    @yield('contenido')
<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="js/app.js"></script>
<script>


{
    //Cachamos el elemento por el id, pero primero le preguntamos si es que existe el puto input file de las foticos
    if(document.getElementById('foto_tanques') && document.getElementById('foto')&&document.getElementById('preview')){
        var input = document.getElementById('foto_tanques'),
        img_tag = document.getElementById('foto')
        previa = document.getElementById('preview')

    //vamos a cachar los eventos que tenga este elemento, en este caso el onchange
    input.addEventListener('change', function(e){
        let reader = new FileReader();

            reader.readAsDataURL(e.target.files[0]);
            reader.onload = function(){
                img_tag.src = reader.result;
                previa.innerHTML = '';
                previa.append(img_tag)
            }
        
    })
    }
}









{

    let numero_tinta = document.getElementById('numero_tinta'),
        img = document.getElementById('img_tag')
    
    if(numero_tinta){
        numero_tinta.addEventListener('change', function(){
            
            valor = document.getElementById('numero_tinta').value
            img.src = 'img/'+valor+'.jpg';


        })
    }
}


    //El codigo del select2
    $(document).ready(function() {
        $('#correos').select2();
    });




    {

    history.forward()

    }
</script>
</body>
</html>