<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') -Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../../css/style.css" rel="stylesheet">
    <style>
        body{
            text-align:center;
        }
        a{
            color:#fff;
            text-decoration:none;
            letter-spacing:0.8px;
            margin-left:10px;
        }
        
        table{
            border:5px ridge #333;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            margin:0 auto;
        }
        header{
            background-color:#333;
            color:#fff ;
            padding:20px;
            text-align:left;
        }
        section{
            margin:50px;
        }
        input{
            border:none;
            border-bottom: 2px solid #333;
            width:50%;
            padding:25px;
            margin-bottom:30px;
        }
        footer{
            background-color:#333;
            color:#fff;
            padding:20px;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>My first project</h1>
    </header>    
<section>
    @yield('mainarea')
</section>
<footer>
    copyright &copy; 2021
</footer>
</body>
</html>