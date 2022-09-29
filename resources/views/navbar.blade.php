<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/navbar.css')}}">

    <title>Document</title>
</head>
<body>
    <div class = "hero">
        <nav>
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEig8xO-nnjR6S1yuMEmG2R8po5-qshEfmtiwYCt9DbEZ8PNWMP9Tfkw0Pxp6zc8UtIiIv8KgDj4yab1vuZ0tI92ThFrJ7Qpc4FCBg66s5w4dj98wz10e1Ue_HQETjSmJhqzq4oE9oTRU7-6X93kDEBwSDl7Pqdslq2Pch7i99Pd4eVJhVQO6zaSvdky/s16000/LOGO.png" class = "logo">
            <img src = "https://img.freepik.com/free-vector/cute-chicken-crowing-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-flat_138676-4544.jpg" class ="user-pic" onclick = "toggleMenu()">
            <div class = "sub-menu-wrap" id = "subMenu">
                <div class ="sub-menu">
                    <div class = "uer-info">
                        <img src = "https://img.freepik.com/free-vector/cute-chicken-crowing-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-flat_138676-4544.jpg">
                        <h2>Juan Velasco</h2>
                    </div>
                    <hr>
                    <a href = "/" class = "sub-menu-link">
                        <p> Editar perfil </p>
                        <span>></span>
                    </a>    
                    <a href = "/" class = "sub-menu-link">
                        <p> Cerrar Sesion </p>
                        <span>></span>

                    </a>  
                </div>
            </div>
        </nav>
    </div>
    <div class = "content">
        <h2>Proyectos como profesor Guia</h2>
        <div class = "buttonInvite">
            <button id = "inviteStudent" class = "buttonAdd"  type="button">Invitar Estudiante</button>
        </div>
    </div>
    <div class = "divider">

    </div>
    <div class = "guide-bg">
            <table >
            <td>
                <div  class = "card-bg">
                    <div  class = "card-title">
                        <a href = "/profesor" class = "card-title">
                            <p> Bot de discord para realizar estafas mediante venta de Nfts </p>
                        </a>    
                        
                    </div>
                    <div class = "profile-card">
                        <table>
                            <td width="18%">
                                <img href = "/estudiante" src = "https://img.freepik.com/free-vector/cute-chicken-crowing-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-flat_138676-4544.jpg">
                            </td>
                            <td>
                                <h2> Sergio Navarro </h2>
                            </td>
                        </table>
                    </div>
                </div>
            </td>

            </table>
    
    </div>


    <div class = "content">
        <h2>Proyectos como profesor Co-Guia</h2>
    </div>
    <div class = "divider">

    <div class = "coguide-bg">
        <table >
            <td>
                <div class = "card-bg"  style ="background: #ec9312">
                    <div class = "card-title">
                        <a href = "/estudiante" class = "card-title">
                            <p> Algoritmo genetico que permita determinar la proxima transformacion de Goku </p>
                        </a>    
                        
                    </div>
                    <div class = "profile-card">
                        <table>
                            <td width="18%">
                                <img src = "https://img.freepik.com/free-vector/cute-chicken-crowing-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-flat_138676-4544.jpg">
                            </td>
                            <td>
                                <h2> Jose Villar </h2>
                            </td>
                        </table>
                    </div>
                </div>  
            </td>
            <td>
                <div class = "card-bg" style ="background: #74aa1d; margin-left:20px;">
                    <div class = "card-title">
                        <a href = "/estudiante" class = "card-title">
                            <p>Inteligencia artificial que descubra en que capitulo One piece se pone bueno. </p>
                        </a>  
                    </div>
                    <div class = "profile-card">
                        <table>
                            <td width="18%">
                                <img src = "https://img.freepik.com/free-vector/cute-chicken-crowing-cartoon-vector-icon-illustration-animal-nature-icon-concept-isolated-flat_138676-4544.jpg">
                            </td>
                            <td>
                                <h2> Jorge Jimenez </h2>
                            </td>
                        </table>
                    </div>
                </div>
            </td>
            </table>


        </div>
    </div>
    <div class = "footer"></div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");

        }
    </script>

</body>



<!-- Definicion de Modales -->

<dialog id = "modalInvitar">
    <h2>Invitar a Estudiante</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhut1cD012loyE5K9euyDJmxiysSnR7L9yZMcxF8ol6BL1lzLD_km4uXPY1Z5dlFkgrs6rvPDH4YJZS4EqxWHpvzqedQ11322YR74nOowhIng9lMNS4BUKb__Tpn49WMmRQNXJ5-xMX_OVo51ZviFtkugItBClByZLxhuqQ3C-yIYBvSDiCtE-X2yAp/w400-h400/2047_U1RVRElPIFNNIDE5MzMtMDY.png"/>
        <p>A continuacion debe ingresar el correo del estudiante que desea invitar a la plataforma, al invitarlo este recibira un enlace para poder registrarse</p>
                <form>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese un correo electronico">
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Enviar">
                    <button id ="close-modal" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>




<script>
    const btnAbrir = document.querySelector("#inviteStudent");
    const btnCerrar = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalInvitar");

    btnAbrir.addEventListener("click",()=> {
        modal.showModal();
    })
    btnCerrar.addEventListener("click", ()=> {
        modal.close();
    })
  

</script>

</html>



