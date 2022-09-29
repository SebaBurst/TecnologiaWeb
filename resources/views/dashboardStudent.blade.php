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
    <div class = "bg-student">
        <div class = "left">
            <div class = "title-student">
                <div class = "logo-buho">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipmTBMI9b8bf_0b6gUD0AZbtyse76cJnu7QPmNUNSLUldWRJXB-C7FOEhcZb8OIjFrZjWWj3bbPSZ7Th78kjjxtNVyYWx4fTA3ldp6aIGLdqtSpOjTVyVa5uMbpI4JbLZmVcLRbUXUumMhNogPKftl1FeKFczUCuRTrfCE9I-MbE0WuMQag9-5Qhqx/s1600/Buho.png" alt="Italian Trulli">
                </div>
                <div class = "edit-title">
                    <div class = "editName">
                        <p>Nombre del proyecto</p>
                        <button id = "titleButton" class = "editbutton" type = "button">Editar</button>
                    </div>
                    <h2>Algoritmo genetico para determinar la proxima transformacion del Goku</h2>
                </div>
            </div>
            <div class = "area-proyect">
                <div class= "area-name">
                    <p> Area del proyecto </p>
                    <button id = "areaButton"class = "editbutton" type = "button">Editar</button>
                </div>
                <div class = "bg-area">
                    <p>DESARROLLO DE SOFTWARE</p>
                </div>
            </div>
            <div class = "planification">
                <div class= "plan-title">
                    <p> Planificacion del proyecto </p>
                    <button id = "editPlanification" class = "editbutton" type = "button">Editar</button>
                </div>
                <div class = "plan-bg"></div>
            </div>
            <div class = "document-status">
                <div class= "document-title">
                    <p> Avances del documento </p>
                    <button id = "buttonDoc" class = "addbutton" type = "button">Agregar</button>
                </div>
                <div class = "document-bg">
                </div>
            </div>
            <div class = "proyect-status">
                <div class= "proyect-title">
                    <p> Avances del proyecto </p>
                    <button id = "buttonP" class = "addbutton" type = "button">Agregar</button>
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

<!-- Definicion de Modales -->

<!-- modal para la planificacion -->
<dialog id = "modalPlan">
    <h2>Subir/Modificar Planificacion</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhE8LY0cQGdoUapP3PLn5bHbKAhDqtw2OeRM7N30zCMBB52ORegnREAQhvUOgMq1q1dyAbPDEXrXocmgaK_ATNe7B1BH6vfC3ELhQWIXmDPFEd02_ey3hsscJmqcEgsc3BakRBT85pBQgf3f-9_9WDy6rYNkX3cmJ33o3r0MRslYNScwRWquajg6AXt/s320/Cartoon-late-student-vector.png"/>
        <p>A continuacion puede subir o actualizar la planificacion de su proyecto, pero debe recordar que el archivo actual se sobreescribira.</p>
                <form>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese nombre del archivo">
                    <br>
                    <br>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese comentarios del archivo">
                    <br>
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Actualizar">
                    <button id ="close-modal" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>


<!-- modal para subir avances -->
<dialog id = "modalDoc">
    <h2>Subir avance del documento</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQV7yp_rxkMc3BY4RTXNu25DTKud_HBHzxtgcKpZ7GCWUvgnNjovawFnfOlpGXwOCl064EeMMOxDvjrSE-fvtEQ20R4YAS9TtWByg7qQwxrckcd8WVXbUxkNv7Y3mw3-uhTnUSQiRgfm7B0qFgl-nUEnMOUjQ8Uweo8dODYPzxXQNzDfbwQaSQYBZi/s320/imagen_2022-09-26_002431661.png"/>
        <p>A continuacion podra subir un archivo .PDF con los avances que ha realizado hasta el momento ¿Haz avanzado, verdad?</p>
                <form>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese nombre del archivo">
                    <br>
                    <br>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese comentarios del archivo">
                    <br>
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Subir">
                    <button id ="close-modal2" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>



<!-- modal para subir avances del proyecto-->
<dialog id = "modalProyect">
    <h2>Subir avance del proyecto</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi-h5rB2AvSNa14cVXHDBy6CBSB6aLZGkPynOSUeg6ONHA1I9zprATCxjCKAiJ5xnVAVNOpdAZ-5VAi712cGLIOBnnscefZ1e4W3emDKWu6Nbd26g9OgxQaFcSn0O_ygo3iKLpriPt1QqmenAyiQ8412P5P612Nzy32ynSueqdXrbXMHH_bHgiqj2wP/s320/23cb2ba51e09c71e159dcbbafab026d119889866_s2_n2.png"/>
        <p>A continuacion podra subir un archivo .zip con los avances que ha realizado hasta el momento de su proyecto ¿Haz avanzado, verdad?</p>
                <form>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese nombre del archivo">
                    <br>
                    <br>
                    <input class = "input-lg" required="required" name="correo" type="text" placeholder="Ingrese comentarios del archivo">
                    <br>
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Subir">
                    <button id ="close-modal3" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>






<!-- modal para seleccionar area-->
<dialog id = "modalSelect">
    <h2>Modificar Area del Proyecto</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8gEM1frBZxxy1xBOYNn8Igfors2Sy_K_nNsK33ag2BaCswsY6KR0TwWrW54-5ICNg9seAj7tF8QjeLtLLbVTG4tUNsXXXtn2zfHQRyh_9IsuCXbz-LMuGa-7r3SWqXBp4IVkWzyKKRPBIiUS3bZH1nNdJnDCDzJEG46thlDHTxAW01WkFl_rjfUG-/s16000/141332240-a-high-school-boy-in-a-blazer-uniform-he-uses-a-personal-computer-.jpg"/>
        <p>A continuacion podra seleccionar/modificar el area en que se desarrolla su proyecto</p>
                <form>
                    <select class = "select-input" name="Area" id="areaTrabajo">
                            <option value="Desarrollo de Sotware">Desarrollo de Software</option>
                            <option value="Investigacion">Investigacion</option>
                            <option value="Otro">Otro</option>
                    </select>
                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Seleccionar">
                    <button id ="close-modal4" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

                </form>
    </div>
</dialog>


<!-- modal para modificar titulo-->
<dialog id = "modalTitulo">
    <h2>Modificar Area del Proyecto</h2>
    <div class = "form-block">
        <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj6cVaLgW7X18TsX4-pcmlYP2I0IltfYWfRD5k_qql6g0HR-UJyDz1NGx8K8fWFwi3ZrkfOucA3xglp7FdnDBow_UNhg43tA0k2og8BDImImphZs94dLShU8PY6obe-_wylpy7Ua8HWaX2UeJXjN5LAUwByE4L1of8DGo6uGFgZPi64TmirU0hnlate/s320/6567d106d1b1df8f1c6b4a2f972af7e19392b318_s2_n2.png"/>
        <p>A continuacion Modificar el nombre de su proyecto, Intente ser creativo...</p>
                <form>
                    <input class = "input-lg" required="required" name="nameProyecto" type="text" placeholder="Ingrese nombre del proyecto">

                    <br>
                    <br>
                    <input  class = "button-lg" type="submit" value="Cambiar">
                    <button id ="close-modal5" class = "button-lgw" type="button" value="Cerrar">Cerrar</button>

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

<!-- script modal de planificicion -->
<script>
    const btnAbrir = document.querySelector("#editPlanification");
    const btnCerrar = document.querySelector("#close-modal");
    const modal = document.querySelector("#modalPlan");

    btnAbrir.addEventListener("click",()=> {
        modal.showModal();
    })
    btnCerrar.addEventListener("click", ()=> {
        modal.close();
    })
</script>


<!-- script modal de editar titulo -->
<script>
    const btnAbrir5 = document.querySelector("#titleButton");
    const btnCerrar5 = document.querySelector("#close-modal5");
    const modal5 = document.querySelector("#modalTitulo");

    btnAbrir5.addEventListener("click",()=> {
        modal5.showModal();
    })
    btnCerrar5.addEventListener("click", ()=> {
        modal5.close();
    })
</script>


<!-- script modal de avances de documento -->
<script>
    const btnAbrir2 = document.querySelector("#buttonDoc");
    const btnCerrar2 = document.querySelector("#close-modal2");
    const modal2 = document.querySelector("#modalDoc");

    btnAbrir2.addEventListener("click",()=> {
        modal2.showModal();
    })
    btnCerrar2.addEventListener("click", ()=> {
        modal2.close();
    })
  

</script>


<!-- script modal area -->
<script>
    const btnAbrir4 = document.querySelector("#areaButton");
    const btnCerrar4 = document.querySelector("#close-modal4");
    const modal4 = document.querySelector("#modalSelect");

    btnAbrir4.addEventListener("click",()=> {
        modal4.showModal();
    })
    btnCerrar4.addEventListener("click", ()=> {
        modal4.close();
    })
  

</script>



<!-- script modal de avances del proyect -->
<script>
    const btnAbrir3 = document.querySelector("#buttonP");
    const btnCerrar3 = document.querySelector("#close-modal3");
    const modal3 = document.querySelector("#modalProyect");

    btnAbrir3.addEventListener("click",()=> {
        modal3.showModal();
    })
    btnCerrar3.addEventListener("click", ()=> {
        modal3.close();
    })
  

</script>
</html>