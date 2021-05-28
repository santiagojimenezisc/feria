<?php
include_once 'dbConnection.php';
session_start();
?>

<style>
.aviso
{
    color:#fff;
    background: #2F488C;
}
.titulo{
    color:#fff;
    background: #2F488C;   
}
.privacidad {
    color:yellow;
}
.privacidad:hover,.privacidad:focus{
    color:aqua;
}

.close{
  color:#fff;
}

.close:hover{
  color:#F8F8FF;
}

</style>



<body>
<div class="modal-content">
      <div class="modal-header text-center aviso">
        <h4 class="modal-title w-100 font-weight-bold titulo">Registrarse</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body aviso">
<center><p style="text-align: center;">Los registros han sido cerrados.<br>¡Muchas gracias por su participación!
</p></center>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" style="margin-right: auto;margin-left: auto; " data-dismiss="modal">Cerrar</button>
      </div>        <!--<form id="registro" class="form-horizontal" method="post" action="register.php">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Nombre</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa text" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Ingrese su nombre"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Apellido(s)</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa text" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Ingrese su(s) apellido(s)"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Correo electrónico</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa text" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Ingrese su email"/>
                </div>
              </div>
            </div>

            

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock text" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Cree una contraseña"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirme su contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock text" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password2" id="password2"  placeholder="Confirme su contraseña"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <center><button datatype="button" class="btn btn-primary registro">Cerrar</button></center>
            </div>
          </form>-->
    </div>



    <script>
$(document).ready(function(){
$("#registro").on("submit",function(e){
e.preventDefault();
var cont = $("#password").val();
var cont2 = $("#password2").val();
if($("#registro [name='name']").val() === '')
{
$("#registro [name='name']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su nombre",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#registro [name='email']").val() === '')
{
$("#registro [name='email']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese un correo electrónico válido",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#registro [name='password']").val() === '')
{
$("#registro [name='password']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese una contraseña",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#registro [name='password2']").val() === '')
{
$("#registro [name='password2']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su confirmación de contraseña",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if (cont!=cont2)
{
$("#registro [name='password']").css("border","2px solid red");
$("#registro [name='password2']").css("border","2px solid red");
swal({
  title: "Verifique que sus contraseñas coincidan",
  text: "Por favor, verifique",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
  else{
        var url = "register.php";
        $.ajax({
           type: "POST",
           url: url,
           data: $("#registro").serialize(),
           success : function(data)
                  {
                if(data=='Success'){
                swal({
                title: "¡Registro exitoso!",
                text: "Sus datos se han registrado correctamente, ingrese a su correo electrónico para validar el acceso a su cuenta.",
                icon: "success",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "emprendimientos.php";
                }
        });}
                else if(data=='Register'){
                   swal({
                title: "Usuario registrado",
                text: "Su correo electrónico ya se encuentra registrado, por favor inicie sesión.",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "index.php";
                }
        });} else if(data=='No existe email'){
                   swal({
                title: "Verifique su correo",
                text: "El correo electrónico ingresado no existe, por favor verifique.",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Verificar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });}
                else if(data=='Inusual'){
                   swal({
                title: "Se ha detectado actividad inusual desde su dispositivo",
                text: "Dile a tus amigos y/o familiares que regalen insignas a tu emprendimiento",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Verificar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });}
                else if(data=='tmpregister'){
                   swal({
                title: "Su cuenta no ha sido activada",
                text: "Ingrese al buzón de su cuenta de correo electrónico registrada para activar el acceso",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Verificar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });}
                else{     
                swal({
                title: "Hubo un error en su registro",
                text: "Verifique sus datos e intente registrarse nuevamente",
                icon: "warning",
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });
                }},
        error : function(jqXHR, status, error){
                    if (jqXHR.status === 0) {
                        alert('Sin conexión\nPor favor, verifique su conexión a internet.');
                    } else if (jqXHR.status == 404) {
                        alert ('La página solicitada no existe.');
                    } else if (jqXHR.status == 500) {
                        alert ('Error interno del servidor.\n Intente nuevamente');
                    } else if (exception === 'parsererror') {
                        alert ('Datos incorrectos.');
                    } else if (exception === 'timeout') {
                        alert ('Tiempo de respuesta agotado.');
                    } else if (exception === 'abort') {
                        alert ('Operación cancelada');
                    } else {
                        alert ('Hubo un error\n' + jqXHR.responseText);
                    }
                 }    
         });
      }
    });
});
    </script>

<script>
$(document).ready(function(){
  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
  });
  $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
  });
});
</script>
  
      
  

</body>      