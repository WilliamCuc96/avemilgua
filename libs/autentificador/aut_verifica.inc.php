<?php
//  Autentificator
//  Gestion de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
//  v1.0  - 17/04/2002 Version inicial.
//  v1.01 - 24/04/2002 Solucionado error sintactico en aut_verifica.inc.php.
//  v1.05 - 17/05/2002 Optimizacion codigo aut_verifia.inc.php
//  v1.06 - 03/06/2002 Correccion de errores de la version 1.05 y error con navegadores Netscape
//  v2.00 - 18/08/2002 Optimizacion codigo + Seguridad.
//                     Ahora funciona con la directiva registre_globals= OFF. (PHP > 4.1.x)
//                     Optimizacion Tablas SQL. (rangos de tipos).
//  v2.01 - 16/10/2002 Solucionado "despistes" de la version 2.00 de Autentificator
//                     en aut_verifica.inc.php y aut_gestion_usuarios.php que ocasinavan errores al trabajar
//                     con la directiva registre_globals= OFF.
//                     Solucionado error definicion nombre de la session.
//
// Descripcion:
// Gestion de Painas restringidas a Usuarios, con nivel de acceso
// y gestion de errores en el Login
// + administracion de usuarios (altas/bajas/modificaciones)
//
// Licencia GPL con estas extensiones:
// - Uselo con el fin que quiera (personal o lucrativo).
// - Si encuentra el codigo de utilidad y lo usas, mandeme un mail si lo desea.
// - Si mejora el codigo o encuentra errores, hagamelo saber el mail indicado.
//
// Instalacion y uso del Gestor de usuarios en:
// documentacion.htm
//  ----------------------------------------------------------------------------
// Modificaciones: (Peledahe)
// v2.02 - 12/12/2005
// - Permite trasladar el nombre de la tabla por medio de paramentros.
// - Chequear pagina que lo llama para devolver errores a dicha pagina.
// - Se incluye la utilizacion de capcha

// Cargar datos conexion y otras variables.
//require("../libs/basicas/config.php");

// chequear pagina que lo llama para devolver errores a dicha pagina.

/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 */

$info=detect();

//echo "Sistema operativo: ".$info["os"];
//echo "Navegador: ".$info["browser"];
//echo "Versión: ".$info["version"];
//echo $_SERVER['HTTP_USER_AGENT'];

/**
 * Funcion que devuelve un array con los valores:
 *	os => sistema operativo
 *	browser => navegador
 *	version => version del navegador
 */

function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WIN","MAC","LINUX");
	# definimos unos valores por defecto para el navegador y el sistema operativo
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";

	# buscamos el navegador con su sistema operativo
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}

	# obtenemos el sistema operativo
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}

	# devolvemos el array de valores
	return $info;
}


$url = explode("?",$_SERVER['HTTP_REFERER']);
$pag_referida = $url[0];
$redir = $pag_referida;

// chequear si se llama directo al script.

if ($_SERVER['HTTP_REFERER'] == ""){
	die(header ("Location:  login.php?error_login=5"));
	exit;
}

// Chequeamos si se esta autentificandose un usuario por medio del formulario
if (isset($_POST['nicklogin']) && isset($_POST['passlogin'])) {

	// Conexion base de datos ya fue hecha en config.php
	$conectar = conectar();
	// realizamos la consulta a la BD para chequear datos del Usuario.
	$query1 = "SELECT u.id,
                          u.nick,
                          u.password,
                          u.permiso,
                          u.nombre,
                          u.apellido,
                          u.email,
                          u.celular,
                          u.direccion,
                          u.nit,
                          u.dpi,
                          u.genero,
                          u.tipoper,
                          u.codigo,
                          u.cargo,
                          u.nacimiento,
                          u.institucion,
                          u.condominios,
                          u.calendario1,
                          u.calendario2,
                          u.foto,
                          u.estatus,
                          (select i.nombre from ".$sql_tabla2." i where i.id = u.institucion) as ninstitucion,
                          (select i.url from ".$sql_tabla2." i where i.id = u.institucion) as url_institucion,
                          (select i.logo_aplicacion from ".$sql_tabla2." i where i.id = u.institucion) as ilogo_aplicacion,
                          (select i.logo_impresion from ".$sql_tabla2." i where i.id = u.institucion) as ilogo_impresion
                 FROM ".$sql_tabla." u
                WHERE nick ='".$_POST['nicklogin']."'";

	$usuario_consulta = mysql_query($query1) or die(header ("Location:  $redir?error_login=1"));

	// miramos el total de resultado de la consulta (si es distinto de 0 es que existe el usuario)
	if (mysql_num_rows($usuario_consulta) != 0) {

		// eliminamos barras invertidas y dobles en sencillas
		$login = stripslashes($_POST['nicklogin']);
		// encriptamos el password en formato md5 irreversible.
		$password = md5($_POST['passlogin']);
		$password = $_POST['passlogin'];

		// almacenamos datos del Usuario en un array para empezar a chequear.
		$usuario_datos = mysql_fetch_array($usuario_consulta);

		// liberamos la memoria usada por la consulta, ya que tenemos estos datos en el Array.
		mysql_free_result($usuario_consulta);
		// cerramos la Base de dtos.
		//mysql_close($db_conexion);

		// chequeamos el nombre del usuario otra vez contrastandolo con la BD
		// esta vez sin barras invertidas, etc ...
		// si no es correcto, salimos del script con error 4 y redireccionamos a la
		// pagina de error.
		if ($login != $usuario_datos['nick']) {
			Header ("Location: $redir?error_login=4");
			exit;
		}

                // si el estatus no es 1, salimos del script con error 9 y redireccionamos a la
		// pagina de error.
		if ($usuario_datos['estatus'] != 1) {
			Header ("Location: $redir?error_login=9");
			exit;
		}

		// si el password no es correcto ..
		// salimos del script con error 3 y redireccinamos hacia la p�ina de error
		if ($password != $usuario_datos['password']) {
			Header ("Location: $redir?error_login=3");
			exit;
		}

		// Paranoia: destruimos las variables login y password usadas
		unset ($login);
		unset ($password);

		// En este punto, el usuario ya esta validado.
		// Grabamos los datos del usuario en una sesion.

		 // le damos un mobre a la sesion.
		session_name($usuarios_sesion);
		 // incia sessiones
		session_start();

		// Capcha (Perry Daniels)

		if ($_SESSION['tmptxt'] != $_POST['tmptxt']) {
			Header ("Location: $redir?error_login=8");
			exit;
		};


		//fin Captcha

		// Paranoia: decimos al navegador que no "cachee" esta paina.
		session_cache_limiter('nocache,private');

		// Asignamos variables de sesion con datos del Usuario para el uso en el
		// resto de paginas autentificadas.

		// definimos usuarios_id como IDentificador del usuario en nuestra BD de usuarios
		$_SESSION['usuario_id']			= $usuario_datos['id'];
		$_SESSION['usuario_nivel']		= $usuario_datos['permiso'];
		$_SESSION['usuario_login']		= $usuario_datos['nick'];
		$_SESSION['usuario_institucion']	= $usuario_datos['institucion'];
    $_SESSION['usuario_condominios']	= $usuario_datos['condominios'];
    $_SESSION['usuario_urlinstitucion']	= $usuario_datos['url_institucion'];
		$_SESSION['usuario_logo_aplicacion']	= $usuario_datos['ilogo_aplicacion'];
    $_SESSION['usuario_logo_impresion']	= $usuario_datos['ilogo_impresion'];
		$_SESSION['usuario_ninstitucion']	= $usuario_datos['ninstitucion'];
		$_SESSION['usuario_nombre']		= $usuario_datos['nombre'] . " " . $usuario_datos['apellido'];
		$_SESSION['usuario_email']		= $usuario_datos['email'];
		$_SESSION['usuario_genero']		= $usuario_datos['genero'];
		$_SESSION['usuario_dpi']		= $usuario_datos['dpi'];
		$_SESSION['usuario_nit']		= $usuario_datos['nit'];
		$_SESSION['usuario_direccion']		= $usuario_datos['direccion'];
    $_SESSION['usuario_calendario1']	= $usuario_datos['calendario1'];
    $_SESSION['usuario_calendario2']	= $usuario_datos['calendario2'];
		$_SESSION['usuario_celular']		= $usuario_datos['celular'];
		$_SESSION['usuario_cargo']		= $usuario_datos['cargo'];
		$_SESSION['usuario_tipoper']		= $usuario_datos['tipoper'];
		$_SESSION['usuario_codigo']		= $usuario_datos['codigo'];
		$_SESSION['usuario_nacimiento']		= $usuario_datos['nacimiento'];
		$_SESSION['usuario_estatus']		= $usuario_datos['estatus'];
		$_SESSION['usuario_foto'] 		= $usuario_datos['foto'];

		if ($_SESSION['usuario_foto']) {
			$_SESSION['usuario_foto'] = $usuario_datos['foto'];
		} elseif ($_SESSION['usuario_genero'] == "F") {
			$_SESSION['usuario_foto'] = "feme.png";
		} else  {
			$_SESSION['usuario_foto'] = "masc.png";
		}


		//definimos usuario_password con el password del usuario de la sesion actual (formato md5 encriptado)
		$_SESSION['usuario_password']		=$usuario_datos['password'];

		//definimos datos adicionales
		$_SESSION['usuario_inicial']		="123";
                $_SESSION['usuario_casa']		="0";

                $sql2 = "INSERT INTO ap_bitacora (
                                    fecha,
                                    usuario,
                                    pagina,
                                    accion,
                                    ip_cliente,
                                    ip_proxy,
                                    ip_remoto,
                                    so,
                                    navegador,
                                    versionnav
                                    ) VALUES (
                                    NOW(),
                                    '".$_SESSION['usuario_login']."',
                                    '".$_SERVER['REQUEST_URI']."',
                                    'Login',
                                    '".$_SERVER['HTTP_CLIENT_IP']."',
                                    '".$_SERVER['HTTP_X_FORWARDED_FOR']."',
                                    '".$_SERVER['REMOTE_ADDR']."',
                                    '".$info["os"]."',
                                    '".$info["browser"]."',
                                    '".$info["version"]."'
                                    ) ";

                if (mysql_query($sql2)){
                    $tt_id=mysql_insert_id(); // retorna el ultimo id creado // Esta correcto
                } else {
                    // dió error
                }

		// Hacemos una llamada a si mismo (scritp) para que queden disponibles
		// las variables de session en el array asociado $HTTP_...
		$pag=$_SERVER['PHP_SELF'];
		Header ("Location: $pag?");
		exit;

	} else {
      // si no esta el nombre de usuario en la BD o el password ..
      // se devuelve a pagina q lo llamo con error
      Header ("Location: $redir?error_login=2");
      exit;
	};

} else {

	// -------- Chequear sesion existe -------

	// usamos la sesion de nombre definido.
	session_name($usuarios_sesion);
	// Iniciamos el uso de sesiones
	session_start();

	// Chequeamos si estan creadas las variables de sesion de identificacion del usuario,
	// El caso mas comun es el de una vez "matada" la sesion se intenta volver hacia atras
	// con el navegador.

	if (!isset($_SESSION['usuario_login']) && !isset($_SESSION['usuario_password'])){
		// Borramos la sesion creada por el inicio de session anterior
		session_destroy();
		Header ("Location: login.php?error_login=5");  //Peledahe
		exit;
	} else {
           // Header ("Location: panel.php");  //Peledahe
	   // exit;
        }
};
?>
