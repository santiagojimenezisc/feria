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
        <h4 class="modal-title w-100 font-weight-bold titulo">Iniciar sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body aviso">
        <form id="ingresa" class="form-horizontal" method="post">

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
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Ingrese su contraseña"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <center><button type="submit" class="btn btn-primary registro">Ingresar</button></center>
            </div>
          </form>
      </div>
    </div>

  

    <script>
$(document).ready(function(){
$("#ingresa").on("submit",function(e){
e.preventDefault();
if ($("#ingresa [name='email']").val() === '')
{
$("#ingresa [name='email']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su correo electrónico",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#ingresa [name='password']").val() === '')
{
$("#ingresa [name='password']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su contraseña",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
  else{
        var url = "ingresa.php";
        $.ajax({
           type: "POST",
           url: url,
           data: $("#ingresa").serialize(),
           success : function(data)
                  {
                if(data=='exitoe'){
                    window.location.href = "emprendimientos.php";
                }
                else if(data=='nopass'){
                   swal({
                title: "Contraseña incorrecta",
                text: "Verifique su contraseña",
                icon: "warning",
                button: "Verificar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "#";
                }
        });}
                else if(data=='nouser'){     
                swal({
                title: "Usuario no registrado",
                text: "Correo electrónico no registrado, por favor regístrese",
                icon: "warning",
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "index.php";
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
  

</body>      