<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <style>
        #main-container{
            margin: 50px auto;
            width: 200px;
   
        }
        table{
            background-color: white;
            width: 50%;
            text-align: left;
            font-size: 30px
        }
        th, td{
            padding: 20px;
            border: black;
     
        }
        thead{
            background-color: #FC7514;
            border-bottom: solid 5px #0000;
            
        }
        tr:nth-child(even){
            background-color: #ddd;
        }
        h1, h2, h3{
            margin-left: 0%;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        h2{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .asterisco{
            font-size: 50px;
            color: rgb(0, 0, 0);
        }
    </style>
    <title>Credenciales</title>
</head>
<body>
    
    <div id="main-container">
        <img src="https://static.wixstatic.com/media/08d4fc_d1a07983fc9a4ec79b17973f2e241cad~mv2.png/v1/fill/w_220,h_86,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/logo%20pabsa%20grupo.png" width="150px" alt="">
      
        <table>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tr>
                <td>{{$usuario}}</td>
                <td>{{$password}}</td>
            </tr>
        </table>
    </div>


</body>
</html>