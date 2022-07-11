<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: lightgrey;
        }
    </style>
    <title>Tintas</title>
</head>
<body>




    @yield('contenido')

<script src="js/app.js"></script>
<script>
    //Cachamos el elemento por el id
    if(document.getElementById('foto_tanques')){
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
</script>
</body>
</html>