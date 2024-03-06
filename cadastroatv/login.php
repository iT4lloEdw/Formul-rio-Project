<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(63, 81, 181), rgb(33,51, 121));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 5em;
            border-radius: 0.9375em;
            color: white;
        }
        input{
            padding: 0.9375em;
            border: none;
            outline: none;
            font-size: 0.9375em
        }
        button{
            background-color: rgb(63, 81, 181);
            border: none;
            padding: 0.9375em;
            width: 100%;
            border-radius: 0.625em;
            color: white;
            font-size: 0.9375em;
            cursor: pointer;
        }
        button:hover{
            background-color: rgb(33, 51, 121); 
        }
        h1{
            margin-top: 2.8125em;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 3.75em;
            color: white;
        }
        .box{
            position: absolute;
            top:75%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 0.5em;
            border-radius: 0.9375em;     
        }
        a{
            text-decoration: none;
            color: white;
            border-radius: 0.9375em;
            padding: 0.5em;       
        }
        a:hover {
            background-color: rgb(33, 51, 121); 

        }
        
        
    </style>

</head>
<body>
        <h1>Acesso do Aluno</h1>

    <div>
        <h2>Login</h2>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Enviar</button>
    </div>

        <div class="box">
        <a href="home.php">Voltar ao Inicio</a>
    </div>
    
    
</body>
</html>