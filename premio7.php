<?php
include_once 'dbConnection.php';
session_start();
if (!(isset($_SESSION['email']))) {
} else {
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
}
$buscanombre=mysqli_query($con,"SELECT * FROM `Emprendimientos` where id='$id'") or die ("Error de nombre");
$name=mysqli_fetch_array($buscanombre);
$namee=$name['nombre'];
$ide=$name['id'];
$buscapuntos=mysqli_query($con,"SELECT puntos FROM `PUNTOS` where id='$ide'") or die ("Error de nombre");
$point=mysqli_fetch_array($buscapuntos);
$puntos=$point['puntos'];
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
        <h4 class="modal-title w-100 font-weight-bold titulo">Canjear Premio</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body aviso">
        <form id="canje" class="form-horizontal" method="post">
        <div class="row">
         <div class="col-md-4">
        <center><img class="card-img-top" src="assets/img/premios/premio10.jpg" alt="goma"></center>
      </div>
      <div class="col-md-8">
        <?php
          if($namee==''){
        echo'<p>Premio: <b>Lapicera Escolar Basic City PB31BC / Rosa</b><br>Costo de canje: 40 <img src="assets/img/coin.png" style="width: 1rem" alt="coin"></p>';
          echo '<p><a style="color:#FFFF00!important;cursor:pointer!important;" data-load-url="loginp.php" data-toggle="modal" data-target="#inicia" data-dismiss="modal">Inicia sesión </a> para poder canjear este premio.</p>';
          }
          elseif ($puntos>=40){echo'<p>Premio: <b>Lapicera Escolar Basic City PB31BC / Rosa</b><br>Costo de canje: 40 <img src="assets/img/coin.png" style="width: 1rem" alt="coin"><br> EDUCACOINS disponibles: '.$puntos.' <img src="assets/img/coin.png" style="width: 1rem" alt="coin"></p>
            <div class="form-group">
              <input type="hidden" class="form-control" name="premio" id="premio"  value="7"/>
              <input type="hidden" class="form-control" name="nombre" id="nombre"  value="'.$namee.'"/>
              <input type="hidden" class="form-control" name="puntos" id="puntos"  value="'.$puntos.'"/>
              <input type="hidden" class="form-control" name="ide" id="ide"  value="'.$ide.'"/>
              <input type="hidden" class="form-control" name="costo" id="costo"  value="40"/>
              <label for="name" class="cols-sm-2 control-label">Nombre</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa text fa-2x" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Apellido(s)</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa text fa-2x" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su(s) apellido(s)"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Dirección</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-home fa text fa-2x" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="dir" id="dir"  placeholder="Ingrese su dirección completa"/>
                </div>
              </div>
            </div>

            

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Teléfono</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone text fa-2x" aria-hidden="true"></i></span>
                  <input type="tel" class="form-control" name="telefono" id="telefono"  maxlength="10"  pattern="[0-9]{10}" placeholder="Ingrese su teléfono a 10 dígitos"/>
                </div>
              </div>
            </div>

      </div>
    </div>
        <div class="modal-footer">
        <button onclick="canjear(this);" type="submit" id="canjea" class="btn btn-danger" style="margin-right: auto;margin-left: auto;">Canjear</button>
    </div>
    </form>';

          }
          elseif($puntos<40){
            echo'<p>Premio: <b>Lapicera Escolar Basic City PB31BC / Rosa</b><br>Costo de canje: 40 <img src="assets/img/coin.png" style="width: 1rem" alt="coin"><br> EDUCACOINS disponibles: '.$puntos.' <img src="assets/img/coin.png" style="width: 1rem" alt="coin"></p>';
          echo '<p>No cuentas con suficientes EDUCACOINS para poder canjear este premio.</p>';
          }
        ?>

        
    </div>
  </div>
      
              <!--<form id="registro" class="form-horizontal" method="post" action="register.php">


            
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
          </form>
    </div>-->



    <script>
function canjear(){
$("#canjea").one("click",function(e){
e.preventDefault();
if($("#canje [name='name']").val() === '')
{
$("#canje [name='name']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su nombre",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#canje [name='apellido']").val() === '')
{
$("#canje [name='apellido']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su(s) apellido(s)",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#canje [name='dir']").val() === '')
{
$("#canje [name='dir']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su dirección completa",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}
else if ($("#canje [name='telefono']").val() === '')
{
$("#canje [name='telefono']").css("border","2px solid red");
swal({
  title: "Por favor, ingrese su telefóno a 10 dígitos",
  text: "",
  icon: "warning",
  button: "Verificar",
  dangerMode: true,
});
}

  else{
        var url = "canjear.php";
        $.ajax({
           type: "POST",
           url: url,
           data: $("#canje").serialize(),
           success : function(data)
                  {
                if(data=='exito'){
                swal({
                title: "¡Canje exitoso!",
                text: "El canje del premio se ha realizado correctamente, en breve recibirá por correo electrónico los detalles.",
                icon: "success",
                closeOnClickOutside: false,
                button: "Continuar",
                }).then(Continuar =>{
                    if(Continuar){
                    window.location.href = "premios.php";
                }
        });}
                else{     
                swal({
                title: "Hubo un error en el canje",
                text: "Verifique sus datos e intente nuevamente",
                icon: "warning",
                button: "Verificar",
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
}
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