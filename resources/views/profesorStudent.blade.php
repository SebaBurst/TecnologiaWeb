<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/dashstudent.css')}}">
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
                            <h2>Rapa</h2>
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
    <div class = "bg-student">
        <div class = "left">
            <div class = "title-student">
                <div class = "logo-buho">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipmTBMI9b8bf_0b6gUD0AZbtyse76cJnu7QPmNUNSLUldWRJXB-C7FOEhcZb8OIjFrZjWWj3bbPSZ7Th78kjjxtNVyYWx4fTA3ldp6aIGLdqtSpOjTVyVa5uMbpI4JbLZmVcLRbUXUumMhNogPKftl1FeKFczUCuRTrfCE9I-MbE0WuMQag9-5Qhqx/s1600/Buho.png" alt="Italian Trulli">
                </div>
                <div class = "edit-title">
                    <div class = "editName">
                        <p>Nombre del proyecto</p>
                    </div>
                    <h2>Algoritmo genetico para determinar la proxima transformacion del Goku</h2>
                </div>
            </div>
            <div class ="action-profesor">
                <div class = "area-proyect" >
                    <div class= "area-name" style = "width :78%">
                        <p> Area del proyecto </p>
                    </div>
                    <div class = "bg-area" style = "width :78%">
                        <p>DESARROLLO DE SOFTWARE</p>
                    </div>
              

            </div>
            <button id = "agregarProfe" class = "profesorButton"  type="button">Agregar Profesor Co-Guia</button>
                <button id = "planificarReunion" class = "profesorButton"  type="button">Planificar reunion</button>


            </div>
           
            <div class = "planification">
                <div class= "plan-title">
                    <p> Planificacion del proyecto </p>
                </div>
                <div class = "plan-bg"></div>
            </div>
            <div class = "document-status">
                <div class= "document-title">
                    <p> Avances del documento </p>
                </div>
                <div class = "document-bg">
                </div>
            </div>
            <div class = "proyect-status">
                <div class= "proyect-title">
                    <p> Avances del proyecto </p>
                </div>
                <div class = "proyect-bg">
                </div>
            </div>

      
        </div>
        <div class = "right">
            <div class = "reunion">
                <div class= "reunion-title">
                    <p> Reuniones </p>
                </div>
                <div class = "reunion-bg">
                </div>
            </div>
            <div class = "repository">
                <div class= "repository-title">
                    <p> Repositorio </p>
                </div>
                <div class = "repository-bg">
                </div>
            </div>




        </div>

    </div>
    <div class = "footer-student"></div >
</body>




<!-- modal para planificar reunion -->
<dialog id = "modalReunion">
    <h2>Planificar Reunion</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaBCuBFMVXYve73kDxLdvYomMU8dk9tOQOCgJxZozWbIS8VQda0Ir9P1Ey6L6QslvS6-ePCb-HSDhAavgrw2hA96Jc7dKx5GJwIt_KWYq-ZOBbRQIuqUHx9M3RCcAb47oZLA0CpvkXCWRLQW7uEgcKgtZ-z9e8zoHRMDj7rZbu6haBkzdCDa5CkBOQ/s320/a-handy-flat-illustration-of-partnership-vector.jpg"/>
        <p>A continuacion puede subir o actualizar la planificacion de su proyecto, pero debe recordar que el archivo actual se sobreescribira.</p>
                <form>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Titulo de la reunion">
                    <br>
                    <br>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Temas a Tratar en la reunion">
                    <br>
                    <br>
                    <p>Seleccione una fecha</p>                    
                    <input class = "date-input" type="date" id="reunionDate" name="agendarReunion">
                    <br>
                    <br>
                    <p> Seleccione hora</p>
                    <input class = "date-input" type="time" id="appt" name="appt">
                    <br>
                    <br>

                    <input  class = "button-lg" type="submit" value="Agendar">
                    <button id ="close-modal" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>
<!--- scripts --->
<script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");

        }
</script>


<!-- script modal de planificicion reunion -->
<script>
    const btnAbrir = document.querySelector("#planificarReunion");
    const btnCerrar = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalReunion");

    btnAbrir.addEventListener("click",()=> {
        modal.showModal();
    })
    btnCerrar.addEventListener("click", ()=> {
        modal.close();
    })
</script>
</html>