function cerrarSesion() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("principal").style.display= "none";
				document.getElementById("login").style.display= "block";
				document.getElementById("contenido").innerHTML = "";
				alert("Sesion cerrada con éxito");									
			}
		};
		xhttp.open("GET", "logout.php", true);
		xhttp.send();
	return false;
}

function login() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var respuesta = this.responseText;
			//console.log(respuesta);
			if(this.responseText==="FALSE"){
				alert("Revise usuario y contraseña");
			}else{
				document.getElementById("principal").style.display= "block";
				document.getElementById("login").style.display= "none";
				document.getElementById("cabecera_usuario").innerHTML = "Usuario: " + usuario;
				cargarCategorias();
			}
		}
	};
	var usuario = document.getElementById("usuario").value;
	var contrasinal = document.getElementById("contrasinal").value;	
	var params = "usuario="+usuario+"&contrasinal="+contrasinal;
	xhttp.open("POST", "login.php", true);		
	// envío con  POT requiere cabecera y cadena de parámetros
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);				
	return false;
}
