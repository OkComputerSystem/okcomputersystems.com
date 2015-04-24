<script type="text/javascript">
		function Redireccionar(){
			window.location='../index.html';
		}
		setTimeout('Redireccionar()', 1000);
	</script>
<?php 
	if(isset($_POST['name'])&&($_POST['email']!='')&&($_POST['city']!='')&&($_POST['comments']!='')){
				$nombre = $_POST['name'];
				$para = "info@okcomputersystems.com, soporte@okcomputersystems.com, enrique.ch@okcomputersystems.com, manuel.her@okcomputersystems.com, victor.cas@okcomputersystems.com, osman.pin@okcomputersystems.com, okcomputersystems@okcomputersystems.com";

				$email = $_POST['email'];
				$city = $_POST['city'];
				$comments = $_POST['comments'];

				$titulo = "Mensaje de Ok Computer Systems";
				$contenido = '<html>
				<body>
					<h1>Haz recibido un mensaje de Ok Computer Systems</h1>
					<hr>
					<p>El visitante <strong>' . $nombre . '</strong> de la ciudad <strong> '. $city .' </strong> te ha enviado lo siguiente.</p>
					<p>Mensaje: <strong>' . $comments . '</strong><br /><br />Puedes ponerte en contacto al email: <strong>' . $email . '</strong></p>
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
