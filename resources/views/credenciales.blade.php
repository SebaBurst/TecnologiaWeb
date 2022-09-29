<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">

    <title>Login</title>
</head>

<body>
    <div class = "navbar">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCjdnJ6gSTRnXoMcM5amgNQbDBsqVXvJNE9bloyK0UfDjimJzTirV856LfRI9b5ENkjHBFyKhgXhNj-9QdvcMp8s_agQsHpMDzxtBpBK7skF2LPbg80g0KSV7KJdNhy5sLP9vfSdGZo3GaJUteMgD2BMXEk8Tigr7BRd15L8cKUR1cmHlYLvqyPH47/s16000/logo.png" alt="Italian Trulli">

    </div>




    <div class = "background-lg">
        <div class = "form-bg">
            <table width="550px" height="100" >
                <td  width = "100px"  colspan="2">         
                       <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipmTBMI9b8bf_0b6gUD0AZbtyse76cJnu7QPmNUNSLUldWRJXB-C7FOEhcZb8OIjFrZjWWj3bbPSZ7Th78kjjxtNVyYWx4fTA3ldp6aIGLdqtSpOjTVyVa5uMbpI4JbLZmVcLRbUXUumMhNogPKftl1FeKFczUCuRTrfCE9I-MbE0WuMQag9-5Qhqx/s1600/Buho.png" alt="Italian Trulli">
                </td>
                <td  colspan="2"> 
                    <h1>BIENVENIDO</h1>
                </td>
            </table href = "/nav">
            <div class = "form-block">
                <form action="/dashboard">
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Correo Electronico">
                    <br>
                    <br>
                    <input class = "input-lg" required="required" name="password" type="password" placeholder="Contrasenia">
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </div> 
    </div>

    <div class = "navbar">
    </div>
</body>
</html>