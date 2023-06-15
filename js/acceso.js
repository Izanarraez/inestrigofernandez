const usuario = document.getElementById('usuario_acceso');
const contraseña = document.getElementById('contraseña_acceso');
const boton = document.getElementById('boton_acceso');

boton.addEventListener('click',pasar);

function pasar(){
    if(usuario.value == 'inestrig45' && contraseña.value == 'Psico54'){
        boton.href = 'configuracion.php';
    }
}