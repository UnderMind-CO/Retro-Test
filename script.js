/* Estos son 2 eventos que escuchan al usuario al click sobre uno de los botones que menciona
el de iniciar sesión o registrarse, ambos de la 'caja trasera'*/

document.getElementById("btn_sesion").addEventListener("click", iniciarsesion);
document.getElementById("btn_registro").addEventListener("click", register);


/* Esto se supone que es una función para que salga el boton de hamburguesa y se vuelva responsiv el nav, pero ahora
funciona un poco mal, muy mal, debo solucionarle*/
function onMenuClick() {
    var navbar = document.getElementById("navigation-bar");
    var responsive_class_name = "responsive";

    navbar.classList.toggle(responsive_class_name);
}


// Estas son las funciones a las cuales hace llamada cada uno de los eventos de arriba, las variables "var" son
// selectores que toman las clases de los elementos del html que componen los forms, para así poder manipularlos
var contenedor_login_registro = document.querySelector(".contenedor_login_registro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var caja_trasera_login = document.querySelector(".caja_trasera_login");
var caja_trasera_register = document.querySelector(".caja_trasera_register");

function iniciarsesion(){

    if(window.innerWidth > 750){

        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{

        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }

    formulario_registro.style.display = "none";
    contenedor_login_registro.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";

}


function register(){


    if(window.innerWidth > 750){

        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    
    }else{

        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.opacity = "1";
    }


}




