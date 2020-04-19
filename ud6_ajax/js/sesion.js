function cerrarSesionUnaPagina() {
		/*cerrar sesión*/
		var xhttp = new XMLHttpRequest();		
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			/*cambiar visibilidades de las secciones*/
			document.getElementById("principal").style.display= "none";
			document.getElementById("login").style.display= "block";
			document.getElementById("contenido").innerHTML = "";
			alert("Sesion cerrada con éxito");									
		}};
		xhttp.open("GET", "logout_json.php", true);
		xhttp.send();		
	return false;
}

function login() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			alert(this.responseText);
			if(this.responseText==="FALSE"){
				alert("Revise usuario y contraseña");
			}else{
				document.getElementById("principal").style.display= "block";
				document.getElementById("login").style.display= "none";
				/*ponemos el usuario devuelto en el hueco correspondiente*/				
				document.getElementById("cabecera_usuario").innerHTML = "Usuario: " + usuario;
				cargarCategorias();
			}
		}
	}
	var usuario = document.getElementById("usuario").value;
	var contrasinal = document.getElementById("contrasinal").value;	
	var params = "usuario="+usuario+"&contrasinal="+contrasinal;
	xhttp.open("POST", "login.php", true);		
	// envío con  POT requiere cabecera y cadena de parámetros
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);				
	return false;
}
