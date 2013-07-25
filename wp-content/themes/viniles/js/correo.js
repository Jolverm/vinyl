addEvent(window,'load',inicializarEventos,false);
 function inicializarEventos(){
 var ref=document.getElementById('viniles');
 
 addEvent(ref,'submit',enviarDatosServidor,false);}
 
 function enviarDatosServidor(e){
 if (window.event)
 window.event.returnValue=false;
 else if (e)
 e.preventDefault(); 
 enviarFormularioServidor();}
 
 function retornarDatos(){
 var cadena='';
 var para=document.getElementById('nombre').value; 
 var mensaje=document.getElementById('mensaje').value;
 var remitente=document.getElementById('remitente').value; cadena='para='+encodeURIComponent(para)+'&mensaje='+encodeURIComponent(mensaje) +'&remitente='+encodeURIComponent(remitente); return cadena;} var conexionServidor;function enviarFormularioServidor() { conexionServidor=crearXMLHttpRequest(); conexionServidor.onreadystatechange = procesarEventos; conexionServidor.open('POST','http://vinilosyviniles.mx/wp-content/themes/viniles/enviarMail.php', true); conexionServidor.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); conexionServidor.send(retornarDatos()); }
 
 function procesarEventos(){
 var resultados = document.getElementById("resultados");
 if(conexionServidor.readyState == 4) {
 resultados.innerHTML =conexionServidor.responseText; }
 else { resultados.innerHTML = 'Enviando...'; }
 }
 //*************************************** //Funciones comunes a todos los problemas //***************************************
 
 function addEvent(elemento,nomevento,funcion,captura){
 if (elemento.attachEvent) { 
 elemento.attachEvent('on'+nomevento,funcion); return true; }
 else if (elemento.addEventListener) { 
 elemento.addEventListener(nomevento,funcion,captura); return true; }
 else return false;}
 function crearXMLHttpRequest() { 
 var xmlHttp=null; 
 if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 else if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest(); return xmlHttp;} 

