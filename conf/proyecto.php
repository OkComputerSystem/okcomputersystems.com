<script type="text/javascript">
		function Redireccionar(){
			window.location='../index.html';
		}
		setTimeout('Redireccionar()', 1000);
	</script>
<?php 
	if(isset($_POST['name'])&&($_POST['email']!='')&&($_POST['telefono']!='')&&($_POST['ciudad']!='')&&($_POST['comments']!='')){
				$nombre = $_POST['name'];
				$para = "info@okcomputersystems.com, soporte@okcomputersystems.com, enrique.ch@okcomputersystems.com, manuel.her@okcomputersystems.com, victor.cas@okcomputersystems.com, osman.pin@okcomputersystems.com, okcomputersystems@okcomputersystems.com";

				$email = $_POST['email'];
				$empresa = $_POST['empresa'];
				$web = $_POST['web'];
				$perfil = $_POST['perfil'];
				$telefono = $_POST['telefono'];
				$ciudad = $_POST['ciudad'];
				$comments = $_POST['comments'];
				$uno = $_POST['1'];
				$dos = $_POST['2'];
				$tres = $_POST['3'];
				$cuatro = $_POST['4'];

				$titulo = "Mensaje de Ok Computer Systems";
				$contenido = '<html>
				<body>
					<h1>Haz recibido un mensaje de Ok Computer Systems: Proyectos</h1>
					<p>El visitante <strong>' . $nombre . '</strong>
					de la ciudad <strong> '.$ciudad.' </strong></p>
					<p>con el correo <strong> '. $email .' </strong></p>
					<p>con el telefono <strong> '.$telefono.' </strong></p>
					<hr>
					<p>Describe la sigiente idea de proyecto: <strong> '.$comments.' </strong></p>
					y esta interesado en: 
					<p><strong> '.$uno.' </strong></p>
					<p><strong> '.$dos.' </strong></p>
					<p><strong> '.$tres.' </strong></p>
					<p><strong> '.$cuatro.' </strong></p>
					<hr>
					<p>Este mensaje ha sido enviado desde <strong>http://okcomputersystems.com</strong></p>
				</body>
				</html>';
				$encabezado = "MINE-Version: 1.0\r\n";
				$encabezado .= "Content-type: text/html; charset=UTF-8\r\n";
				$encabezado .= "From: okcomputersystems.com <info@okcomputersystems.com/>\r\n";
				$encabezado .= 'Reply-To: ' . $email . '';

				$envio = mail($para,$titulo,$contenido,$encabezado);
				if($envio == true){
					echo "<h1>El mensaje se ha enviado correctamente</h1>";
				}
				else{
					echo "<h1>Se ha presentado un error en el envío del email</h1>";
				}
			}
			else{
				echo "<h1>Se ha presentado un error, completa los campos del formulario</h1>";
			}		
?>
