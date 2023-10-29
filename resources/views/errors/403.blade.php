<!DOCTYPE html>
<html>
<head>
    <title>403 - Acceso Denegado</title>
    <style>
        body {
            background: url('https://www.eltiempo.com/files/article_main_1200/uploads/2023/08/18/64dff4cb4399d.jpeg');
            margin: 0;
        }
        .back{
            background: rgba(0, 0, 0, 0.738);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        h1{
            font-size: 3em;

        }
        p, span{
            font-size: 2em;
        }
        p, span, h1{
            text-shadow: 0 0 5px turquoise;
        }
        .container {
            padding: 5px 15px;
            text-align: center;
            width: 50%;
            height: 320px;
            background: rgba(0, 0, 0, 0.31);
            -webkit-box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);
            box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);
            color: white;
            
        }
        /* //////// */
        .btn {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
        }
        .btn a{
  position: relative;
  color: #f5f5f5;
  height: 70px;
  width: 220px;
  display: block;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  background-image: linear-gradient(115deg,#4fcf70,#fad648,#a767e5,#12bcfe,#44ce7b);
}
.btn a:hover{
  animation: rotate 0.4s linear infinite;
}
@keyframes rotate {
  100%{
    filter: hue-rotate(-360deg)
  }
}
.btn a span{
  height: 88%;
  width: 96%;
  background: #111;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 6px;
  line-height: 62px;
  font-size: 25px;
  transform: translate(-50%, -50%);
}
    </style>
</head>
<body>
    <div class="back">
    <div class="container">
        <h1>403 - Acceso Denegado</h1>
        <p>Eeh eeh ¿Pa donde va (/°-°)/?</p>
        <p>No tienes permiso para acceder a esta página.</p>
        <span>Volver </span><li class="btn"><a href="{{route('home')}}"><span>Home</span></a></li>
    </div>
    </div>
</body>
</html>
