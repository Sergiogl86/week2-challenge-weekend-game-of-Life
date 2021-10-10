
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="es" />
<meta name="distribution" content="global" />
<meta name="COPYRIGHT" content="ALEGSA">
<meta name="CREATOR" content="ALEGSA">
<meta name="description" content="Significado de cuadrícula: f. Conjunto de cuadrados que resultan de cortarse perpendicularmente dos series de rectas paralelas. En otras palabras, es un dibujo de una red de líneas horizontales y verticales espaciadas uniformem">
<meta name="keywords" content="definicion significado ejemplos oraciones frases rae sinónimo cuadrícula">
<meta property="fb:app_id" content="2099378923621008" />
<title>Cuadrícula | Significado de cuadrícula</title>
<script defer type="c0cd6f957549d206bf81043a-text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("../../../Definiciones/rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
		
			if (typeof(thisValue)!="undefined"){
			var pagina = 'https://www.definiciones-de.com/Definicion/de/'+thisValue+'.php';
			document.location.href=pagina;}
	}


function addLink() {
   if (typeof window.getSelection == "undefined") return; //IE8 or earlier...

    var body_element = document.getElementsByTagName('body')[0];
    var selection = window.getSelection();

    //if the selection is short let's not annoy our users
    if (("" + selection).length < 30) return;

    //create a div outside of the visible area
    var newdiv = document.createElement('div');
    newdiv.style.position = 'absolute';
    newdiv.style.left = '-99999px';
    body_element.appendChild(newdiv);
	var slct = selection.getRangeAt(0);
    newdiv.appendChild(slct.cloneContents());			
				
    //we need a <pre> tag workaround
    //otherwise the text inside "pre" loses all the line breaks!
    if (slct.commonAncestorContainer.nodeName == "PRE") {
        newdiv.innerHTML = "<pre>" + newdiv.innerHTML + "</pre>";
    }

		newdiv.innerHTML += "<br /><br />Fuente: <a href='"
	+ document.location.href + "'>"
	+ document.location.href + "</a> &copy; Definiciones-de.com";
		
   selection.selectAllChildren(newdiv);
   window.setTimeout(function () { body_element.removeChild(newdiv); }, 200);

}
function listener(){
	var doc = document.documentElement;
	doc.oncopy = addLink;
}

</script>
<style type="text/css" media="all">
/* Global Defaults
=====================================================================*/
body,div,ul,li {
    margin:0;
    padding:0;
}

ul {
    list-style:none;
}

:focus {
    outline: 0;
}
.clear { 
    clear:both;
}
/* Global Elements
=====================================================================*/
body {
    background:#5da1c0 url(//www.definiciones-de.com/header/header.png) repeat-x;
    line-height: 1.6em;
    font:11px arial, verdana, serif;
}
.replace{
    position:relative;
    margin:0;
    padding:0;
    /* \*/
    overflow:hidden;
    /* */
}
.replace span{
    display:block;
    position:absolute;
    top:0;
    left:0;
    z-index:1;
}
.skiplink{
    display:none;
}

.tablaEspecial {
    border-collapse:collapse;
    border-spacing:0;
}

/* Start CSS Coding
=====================================================================*/
#wrapper {
    width:999px;
    margin:0 auto;
}
#header {
    width:999px;
    height:43px;
    margin: 0 0 12px 0;
}
#logo{
    width:255px;
    height:43px;
    font-size:1.2em;
    position:relative;
    overflow:hidden;
    display:inline;
    float:left;
    text-indent: -5000px;
}
#logo span{
    background:url(//www.definiciones-de.com/header/logo.png) no-repeat;
/*    background-image: url(//s3.amazonaws.com/alegsa/sprites/sprite_270.png);*/
 /*   background-position: -10px -132px;*/
    position:absolute;
    width:100%;
    height:100%;
    cursor:pointer;
}
#menutop {
    float: right;
    display: inline;
    margin: 8px 0 0 0;
    height: 27px;
}

#menutop a, #menutop a:link, #menutop a:visited, #menutop a:hover{
    color:#0071c8;
    text-decoration:none;
}

#menutop li {
    display: inline;
    float: left;
    height: 27px;
/*    background: url(//www.alegsa.com.ar/header/topmenu_left.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -10px;
    margin: 0 6px 0 0;
}
#menutop li a, #menutop li a:link, #menutop li a:visited {
    display: inline;
    float: left;
    height: 21px;
    background: url(//www.definiciones-de.com/header/topmenu_right.png) no-repeat 100% 0;
    padding:6px 12px 0 12px;
    font-size:1.1em;
    color:#c7e5fc;
    font-weight:bold;
    text-transform:uppercase;
}
#menutop li:hover {
    background-position:-10px -37px;
}
#menutop li:hover a, #menutop li:hover a:link, #menutop li:hover a:visited, #menutop li a:hover {
    background-position:100% -27px;
    color:#fff;
    text-decoration:none;
}
#menutop li.last {
    margin: 0;
}

#placemainmenu {
    width: 999px;
    height: 41px;
/*    background: url(//www.alegsa.com.ar/menu/mainmenu.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_1019.png);
    background-position: -10px -10px;
    margin: 0 0 12px 0;
}

#mainmenu {
    position:relative;
    width:760px;
    height:28px;
    float:left;
    display: inline;
    margin: 6px 0 0 0;
    padding: 0 0 0 7px;
    z-index:3000;
}

#framefb {
	position:relative;
	padding-top:10px;
}

#anuncio {
	position:relative;
	padding-bottom:10px;
	padding-left:5px;
}

#mainmenu a, #mainmenu a:link, #mainmenu a:visited, #mainmenu a:hover{
    color:#0071c8;
    text-decoration:none;
}

#mainmenu li {
    display:inline;
    float:left;
    height:28px;
    margin:0 5px 0 0;
    position:relative;
}
#mainmenu li:hover, #mainmenu li.active {
/*    background:url(//www.alegsa.com.ar/menu/menu_left.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -84px;
}
#mainmenu li a, #mainmenu li a:link, #mainmenu li a:visited {
    display:inline;
    float:left;
    height:22px;
    padding:6px 20px 0 20px;
    font-size:1.2em;
    font-weight:bold;
    color:#797979;
}
#mainmenu li a:hover, #mainmenu li.active a, #mainmenu li.active a:link, #mainmenu li.active a:visited, #mainmenu li:hover a, #mainmenu li:hover a:link, #mainmenu li:hover a:visited {
    background:url(//www.definiciones-de.com/menu/menu_right.png) no-repeat 100% 0;
    text-decoration:none;
    color: #4b4b4b;
}
/* Start CSS POPUP Menu
=====================================================================*/
#placemainmenu #mainmenu ul a{
    text-align:left;
    border:none;
    background:none;
}
#placemainmenu ul ul {
    position:absolute;
    z-index:1000;
    display:none;
    width:189px;
    margin:26px 0 0 0;
    left:0;
    border-top:none;
}
#placemainmenu ul li ul li, #placemainmenu ul li ul li:hover {
    display:inline;
    width:183px;
    height:28px;
    float:left;
/*    background:url(//www.alegsa.com.ar/menu/dropdown_back.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -244px;
    padding: 2px 0 0 6px;
}
#placemainmenu ul li ul li.top, #placemainmenu ul li ul li.top:hover {
    width:183px;
    height:28px;
/*    background:url(//www.alegsa.com.ar/menu/dropdown_top.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -187px;
    padding:9px 0 0 6px;
}
#placemainmenu ul li ul li.bottom, #placemainmenu ul li ul li.bottom:hover {
    width:183px;
    height:31px;
/*    background:url(//www.alegsa.com.ar/menu/dropdown_bottom.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -294px;
    padding:2px 0 0 6px;
}
#placemainmenu #mainmenu li:hover ul li a, #placemainmenu #mainmenu li:hover ul li a:link, #placemainmenu #mainmenu li:hover ul li a:visited {
    width:159px;
    color:#4b4b4b;
    font-size:1.1em;
    display:inline;
    float: left;
    height:18px;
    padding: 6px 9px 0 9px;
    margin: 0;
    text-transform:none;
    background:none;
    font-weight: lighter;
}
#placemainmenu #mainmenu li:hover ul li a:hover, #placemainmenu #mainmenu li ul li a:hover {
    text-decoration:none;
    color:#fff;
/*    background:url(//www.alegsa.com.ar/menu/dropdown_hover.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_270.png);
    background-position: -10px -344px;
}
div#placemainmenu li:hover ul ul,
div#placemainmenu li li:hover ul ul
{display:none;}

div#placemainmenu li:hover ul,
div#placemainmenu li li:hover ul
{display:block;}
/* End CSS Drop Down Menu */

#contenttop {
    width: 999px;
    height: 16px;
/*    background: url(//www.alegsa.com.ar/content/content_top.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_1019.png);
    background-position: -10px -71px;
    font-size: 0;
}
#content {
    position:relative;
    width: 965px;
    background: url(//www.definiciones-de.com/content/content_back.png) repeat-y;
    padding: 0px 17px 17px 17px;
    z-index:0;
}
#contentbot {
    width: 999px;
    height: 16px;
/*    background: url(//www.alegsa.com.ar/content/content_bot.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_1019.png);
    background-position: -10px -108px;
    font-size: 0;
}

#contentfooter {
    position:absolute;
    width: 980px;
    height: 16px;
/*    background: url(//www.alegsa.com.ar/footer/foot.png) no-repeat;*/
    background-image: url(//www.definiciones-de.com/sprites/sprite_1019.png);
    background-position: -10px -144px;
    padding: 5px 17px 17px 17px;
    z-index:1;
}
#contactofooter a, #contactofooter a:link, #contactofooter a:visited, #contactofooter a:hover{
    color:#0071c8;
    text-decoration:none;
}

#contactofooter a:focus, #contactofooter a:hover{
    text-decoration:underline;
}

#contactofooter {
    position:relative;
    float: right;
    margin: 6px 10px 0 0;
    z-index:2;
}
.EstiloPoliticas {
    color:#1A4877;
    font-weight: bold;
}

	h3 {
		margin: 0px;
		padding: 0px;	
	}

	.suggestionsBox {
		position:absolute;
		left: 575px;
		margin: 10px 0px 0px 0px;
		width: 200px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
		z-index:14;
	}
	
	.suggestionList {
		margin: 0px;
		padding: 0px;
	}
	
	.suggestionList li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}
	
	.suggestionList li:hover {
		background-color: #659CD8;
	}
	

a:hover{
	color:#09F;
}

a.clase1:link {color:#000000;
text-decoration:none;
border-bottom: thin dotted #B3ADFF;
} 
a.clase1:hover {color:#09F;
text-decoration:none;
} 

#cabecera {
	background:#366AE2;
	font:Verdana;
	font-size:23px;
	color:#FFF;
	font-weight:bolder;
	padding:5px 15px 5px 15px;
	border: 1px solid #000;
}
#cabecera a {
	text-decoration:none;
	color:#FFF;
}

#busqueda {
	background:#DBDBDB;
	font:Verdana;
	font-size:14px;
	color:#000;
	padding:10px 15px 10px 15px;
	border: 1px solid #000;
}
#cabeceraAdicional {
	background:#ABCCFE;
	font:Verdana;
	font-size:8px;
	color:#000;
	padding:5px 15px 5px 15px;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top: 1px solid;
	border-color:#000;
}
#tituloDefinicion {
	background:#1E498A;
	font:Verdana;
	font-size:15px;
	color:#FFF;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top:none;
	border-color:#000;
	padding:15px 15px 15px 15px;
}
#categoria_bread {
	background:#8A8A8A;
	font:Verdana;
	font-size:15px;
	color:#FFF;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top:none;
	border-color:#000;
	padding:3px 3px 3px 15px;
}
#categoria_bread a {
	color:#FFF;
}
#categoria_bread a:hover {
	color:#FAFF55;
}
#titular{
	display: inline;
	font-size:15px;
}
#titular_principal{
	display: inline;
	font-size: 30px;
}
#definicion {
	background: #F4F4F4;
	font: Verdana;
	font-size: 16px;
	color: #000;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top: none;
	border-color: #000;
	padding-bottom: 15px;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
}
#informacion {
	padding: 0px 10px 10px 0px;
	width: 550px;
	margin-bottom: 15px;
	margin-left: 10px;
	float: left;
	background-color:#F4F4F4;
	line-height: 2;

}

#menuDerecha {
	background: #CACACA;
	float: right;
	padding-top: 5px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 5px;
	width: 355px;
	bottom: 100px;
	margin-bottom: 15px;
	text-align:center;
}


#cabeceraComent {
	clear:both;
	background:#DFDFDF;
	font:Verdana;
	font-size:12px;
	color:#000;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top: 1px solid;
	border-color:#000;
	font-weight:bolder;
	height:20px;
}
#cabeceraComentComentarios {
	padding: 2px 0px 2px 15px;
	float:left;
}
#cabeceraComentComentarios a:link {
	text-decoration:none;
}
#cabeceraComentComentarios a:visited {
	text-decoration:none;
}
#cabeceraComentEscribir {
	background:#FFE888;
	float:right;
	border-left: 1px solid;
	padding: 2px 15px 2px 15px;
	font-weight:bold;
	height:16px;
}
#cabeceraComentEscribir a:link {
	color:#555555;
}
#comentario {
	background:#D9EFFF;
	font:Verdana;
	font-size:12px;
	color:#000;
	border-bottom: 1px solid;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top:none;
	border-color:#000;
	padding:5px 15px 5px 6px;
}
#comentario ul{
	list-style-type: none;
	padding-left: 12px;
}
#comentario li{
	padding-left: 12px;	
	background: url(https://www.definiciones-de.com/Diccionario/marca.gif) 0em 0.4em no-repeat;
	margin-bottom: 5px;
}

#fechaCom {
	font-size: 10px;
	color: #668;
	font-weight:bold;
	padding-left:15px;
}
#todavia {
	padding:5px 5px 5px 5px;
	font-weight:bold;
}
#coment {
	padding:5px 5px 5px 5px;
}
.snips {
	font-size:11px;
}
UL {
	list-style:disc;
	padding-left:20px;
}

ol {
    counter-reset: my-badass-counter;
	margin-left:0px;
	padding-left:5px;
}
ol li {
	padding-bottom:45px;
}

ol li:before {
    content: "• "counter(my-badass-counter)" •";
    counter-increment: my-badass-counter;
    margin-right: 10px;
    font-weight: bold;
	color:blue;
}

#alternating-content .item:nth-child(odd) {
background-color: #eee;  
}

#alternating-content .item:nth-child(even) {
background-color: #ddd;  
}

#alternating-content .item:hover {
background-color: #FFEEB6;  
}

.item{
	margin-bottom:5px;
	padding-bottom:5px;
	padding-right:5px;
	padding-left:5px;
	padding-top:5px;
}

.seccion_titular{
	background-color:#C4C4C4;
	font-weight:bolder;
	padding-left:5px;
	margin-bottom:5px;
	margin-top:10px;
}

.seccion_cuerpo{
	background-color:#eee;
	padding-left:5px;
	padding-top:5px;
	padding-bottom:5px;
	padding-right:5px;
	margin-bottom:20px;
}
.seccion_cuerpo:hover {
	background-color: #FFEEB6; 
}

.explicacion_extra{
	font-size: 80%;
	text-align: right;
}
.explicacion{
	font-size: 80%;
	color:#555555;

}
.frasesita{
	font-style:italic;
}

#abc{
width: 100%;
height: 100%;
opacity: 0.96;
top: 0;
left: 0;
display: none;
position: fixed;			
background-color: #313131;
overflow:auto;
z-index: 10000;
}

img#close{
position: absolute;
right: -14px;
top: -14px;
cursor: pointer;
}

div#popupContact{
position: absolute; 
left: 50%;
top: 17%;
margin-left: -202px;
font-family: Verdana;
z-index: 10001;
}

#formf{
max-width: 300px;
min-width: 250px;
padding: 10px 50px;
border: 2px solid gray;
border-radius: 10px;
font-family: Verdana;
font-weight: bold;
font-size: 16px;
background-color: white;
}

#hd2f{
background-color: #FEFFED;
padding: 20px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}

#hrf{
margin: 10px -50px;
border: 0; 
border-top: 1px solid #ccc;
}
 
#namef{
background-image: url('../../Definiciones/name.jpg');
background-repeat: no-repeat;
background-position: 5px 7px;
width:82%;
padding: 10px;
margin-top: 10px;
border: 1px solid #ccc;
padding-left: 40px;
font-size: 15px;
font-family: Verdana;
}

#emailf{
background-image: url('../../Definiciones/email.png');
background-repeat: no-repeat;
background-position: 5px 7px;
width:82%;
padding: 10px;
margin-top: 10px;
border: 1px solid #ccc;
padding-left: 40px;
font-size: 15px;
font-family: Verdana;
}

#paisf{
background-image: url('../../Definiciones/world.png');
background-repeat: no-repeat;
background-position: 5px 7px;
}

select{
width:82%;
padding: 10px;
margin-top: 10px;
border: 1px solid #ccc;
padding-left: 40px;
font-size: 15px;
font-family: Verdana;
} 

#comentariof{
background-image: url('../../Definiciones/msg.png');
background-repeat: no-repeat;
background-position: 5px 7px;
width:82%;
height: 140px;
padding: 10px;
resize:none;
margin-top: 10px;
border: 1px solid #ccc;
padding-left: 40px;
font-size: 16px;
font-family: Verdana;
margin-bottom: 30px;
}

#submitf{
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color: white;
border: 1px solid #FFCB00;
padding: 10px 0;
font-size:20px;
cursor:pointer;
border-radius: 5px;
font-family: Verdana;
}


#alerta{
color:#DD0003;
font-weight:bold;
font-family: Verdana;
font-size: 15px;
}

#correcto{
color:blue;
font-weight:bold;
font-family: Verdana;
font-size: 15px;
}

i{
	color:#4D4D4D;
}

.EstiloSubtitulos {
    color:#1A4877;
    font-weight: bold;
	font-size:larger;
}

h2 { color:#1A4877; font-weight: bold; font-size:larger;  margin-top: 0;  margin-bottom: 0;  margin-left: 0;  margin-right: 0; display:inline;}

 .container_relacionado {
	 width: 50%;
	 margin: auto;
 }

 .categoria_relacionada {
         width: 125px;
         height:auto;
         flex-shrink: 0;
         margin: 30px 15px 15px 15px;
 }
		
.imagen_categoria{
			text-align:center;		
		}
.texto_categoria{
			text-align:center;
		}
#tabla
{
	margin-top: 25px;
}		
#tabla li
{
  margin-bottom: 10px;
}

a.anchor {
    display: block;
    position: relative;
    top: -100px;
    visibility: hidden;
}
</style>
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://www.definiciones-de.com/m/Definicion/de/cuadricula.php">
<link rel="alternate" hreflang="en" href="https://en.definiciones-de.com/art/cuadricula" />
<link rel="alternate" hreflang="it" href="https://it.definiciones-de.com/art/cuadricula" />
<link rel="alternate" hreflang="pt" href="https://pt.definiciones-de.com/art/cuadricula" />
<link rel="alternate" hreflang="es" href="https://www.definiciones-de.com/Definicion/de/cuadricula.php" />
<link rel="alternate" hreflang="x-default" href="https://www.definiciones-de.com/Definicion/de/cuadricula.php" />
<meta name="thumbnail" content="https://www.definiciones-de.com/Imagen/cuadricula.png" />
<link rel="dns-prefetch" href="//google-analytics.com">
<link rel="dns-prefetch" href="//partner.googleadservices.com">
<link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
<link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
<link rel="dns-prefetch" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="//apis.google.com">
<link rel="preconnect" href="https://www.google-analytics.com">
<link rel="preconnect" href="https://partner.googleadservices.com">
<link rel="preconnect" href="https://pagead2.googlesyndication.com">
<link rel="preconnect" href="https://googleads.g.doubleclick.net">
<link rel="preconnect" href="https://apis.google.com">
<meta property="og:type" content="article" />
<meta property="og:title" content="Cuadrícula | Significado de cuadrícula" />
<meta property="og:description" content="Significado de cuadrícula: f. Conjunto de cuadrados que resultan de cortarse perpendicularmente dos series de rectas paralelas. En otras palabras, es un dibujo de una red de líneas horizontales y verticales espaciadas uniformem" />
<meta property="og:url" content="https://www.definiciones-de.com/Definicion/de/cuadricula.php" />
<meta property="og:site_name" content="Definiciones-de.com" />
<meta property="article:tag" content="definición" />
<meta property="article:tag" content="significado" />
<meta property="article:tag" content="cuadricula" />
<meta property="article:published_time" content="13/06/2019" />
<meta property="article:modified_time" content="13/06/2019" />
<meta property="og:updated_time" content="13/06/2019" />
<meta property="og:image" content="https://www.definiciones-de.com/Imagen/cuadricula.png" />

</head>
<script defer type="c0cd6f957549d206bf81043a-text/javascript">

function check_empty(palabra){

if(document.getElementById('namef').value == "" 
|| document.getElementById('emailf').value == "" 
||document.getElementById('comentariof').value == ""){
				 $(  '#texto' ).html('<span id="alerta">Completar todos los campos</span>');
}
	else {  
		$cadena = document.getElementById('emailf').value;

			if (document.getElementById('paisf').selectedIndex==0)
			{
				$(  '#texto' ).html('<span id="alerta">Debe seleccionar un país...</span>');
				die();
			};
		
			$.ajax({
             url: '../../Definiciones/registrar_comentario.php',
             data: { nombre: document.getElementById('namef').value, email: document.getElementById('emailf').value, comentario: document.getElementById('comentariof').value, pais: document.getElementById('paisf').value, palabra: palabra},
             type: 'POST',
             success: function (data) {
				 $(  '#texto' ).text('');
                 $(  '#texto' ).html(data);
             						}
	     		});
			$('#namef').fadeOut(1000);
			$('#paisf').fadeOut(1000);
			$('#comentariof').fadeOut(1000);
			$('#emailf').fadeOut(1000);
			$('#submitf').fadeOut(1000);
			
			$( "#submitf" ).prop( "disabled", true );
			
			setTimeout(function(){ div_hide(); 
			$( "#submitf" ).prop( "disabled", false );
			}, 10000);
			
			setTimeout(function(){ div_hide(); 
			$('#namef').fadeIn(1000);
			$('#paisf').fadeIn(1000);
			$('#comentariof').fadeIn(1000);
			$('#emailf').fadeIn(1000);
			$('#submitf').fadeIn(1000);
			$(  '#texto' ).html('<b>Ya envió un comentario con anterioridad. Puede corregir lo enviado o enviar otra consulta...</b>');
			}, 11000);
		}
}

//function to display Popup
function div_show(){ 
$('#abc').fadeIn(500);
}

//function to hide Popup
function div_hide(){ 
$('#abc').fadeOut(500);
}
    </script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c0cd6f957549d206bf81043a-|49"></script><body onLoad="listener()">

<script defer type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "mainEntityOfPage":{
      "@type":"WebPage",
      "@id":"https://www.definiciones-de.com/Definicion/de/cuadricula.php"
    },
    "headline": "Cuadrícula | Significado de cuadrícula",
	"image": {
      "@type": "ImageObject",
      "url": "https://www.definiciones-de.com/Imagen/cuadricula.png"},    "datePublished": "13/06/2019",
    "dateModified": "13/06/2019",
    "author": {
      "@type": "Person",
      "name": "Leandro Alegsa",
	  "birthDate": "1983-22-08",
	  "publishingPrinciples": "https://www.definiciones-de.com/Definiciones/general_autor.php",
	  "description": "Webmaster, programador, diseñador; estudiante de inglés y alemán.",
	  "sameAs": "https://www.facebook.com/Alegsa.com.ar/"
	},
    "publisher": {
      "@type": "Organization",
      "name": "Definiciones-de.com",
	  "url" : "https://www.definiciones-de.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.definiciones-de.com/amp/logo.png",
        "width": 514,
        "height": 60
      }
    },
    "description": "Significado de cuadrícula: f. Conjunto de cuadrados que resultan de cortarse perpendicularmente dos series de rectas paralelas. En otras palabras, es un dibujo de una red de líneas horizontales y verticales espaciadas uniformem"
  }
  </script>
<script defer type="c0cd6f957549d206bf81043a-text/javascript">
function buscaUnidadContextual(unidad_contexual, ubicacion, palabra, id_frase){

		$.ajax({
             url: '../../Definiciones/buscar_unidad_contextual.php',
             data: { unidad_contextual: unidad_contexual, palabra: palabra, id_frase: id_frase},
             type: 'POST',
             success: function (data) {
				 $(  '#texto'+ubicacion ).text('');
                 $(  '#texto'+ubicacion ).html(data);
 
             }
	     });
		
}
</script>
<div id="wrapper">
<div id="header">
<a href="//www.definiciones-de.com/index.php" class="replace" id="logo"><span></span>Definiciones-de.com</a>
<ul id="menutop">
<li><a href="//www.definiciones-de.com/index.php">ÍNDICE</a></li>
<li><a href="//www.definiciones-de.com/Definiciones/general_categorias.php">CATEGORÍAS</a></li>
<li><a href="//www.definiciones-de.com/buscar.php">BUSCAR PALABRA</a></li>
<li><a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">¿DUDAS?</a></li>
<li class="last"><a href="//www.definiciones-de.com/Definiciones/general_politicas.php">CONTÁCTESE</a></li>
</ul>
</div>
</div wrapper>
<div id="wrapper">
<div class="container lateral-banners" style="
width: 120px; 
  position: fixed;
  margin-top:55px;
  margin-left: -160px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="9980554785"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div id="wrapper">
<div id="placemainmenu">
<ul id="mainmenu">
<li class="active"><a href="//www.definiciones-de.com/index.php">Inicio</a></li>
<li><a href="#">Naturaleza</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/16_0.php">Diccionario de Anatomía</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/15_0.php">Diccionario de Astronomía</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/44_0.php">Diccionario de Aves</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/6_0.php">Diccionario de Biología</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/7_0.php">Diccionario de Botánica</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/12_0.php">Diccionario de Zoología</a></li>
</ul>
</li>
<li><a href="#">Sociedad</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/5_0.php">Dicc. de Arte y Cultura</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/25_0.php">Diccionario de Biografías</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/21_0.php">Diccionario de Historia</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/2_0.php">Dicc. de Sociedad y Política</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/8_0.php">Diccionario de Religión</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/158_0.php">Diccionario de Cristianismo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/19_0.php">Diccionario de Economía</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/164_0.php">Dicc. de Palabras Cultas</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/31_0.php">Diccionario de Pintura</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/152_0.php">Dicc. de Pueblos Originarios</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/17_0.php">Dicc. de Música y Baile</a></li>
</ul>
</li>
<li><a href="#">Ciencias</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/1_0.php">Diccionario de Ciencia</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/26_0.php">Dicc. de Electr&oacute;nica</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/30_0.php">Dicc. de Enfermedades</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/13_0.php">Dicc. de Física y Química</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/9_0.php">Dicc. de Geografía y Geol.</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/20_0.php">Diccionario de Matemáticas</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/11_0.php">Diccionario de Mecánica</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/10_0.php">Diccionario de Medicina</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/14_0.php">Dicc. de Óptica y Fotografía</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/22_0.php">Diccionario de Psicología</a></li>
</ul>
</li>
<li><a href="#">Deportes</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/18_0.php">Deportes en general</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/186_0.php">Arquería</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/183_0.php">Artes Marciales</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/166_0.php">Atletismo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/192_0.php">Automovilismo</a></li>
 <li><a href="//www.definiciones-de.com/Definicion/Cat/167_0.php">Bádminton</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/169_0.php">Balonmano</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/170_0.php">Béisbol</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/171_0.php">Boxeo y Lucha</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/172_0.php">Canotaje y Remo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/174_0.php">Ciclismo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/190_0.php">Deportes Acuáticos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/181_0.php">Deportes Ecuestres</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/175_0.php">Esgrima</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/176_0.php">Esquí</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/177_0.php">Fútbol</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/178_0.php">Gimnasia</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/179_0.php">Golf</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/180_0.php">Halterofilia</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/182_0.php">Hockey</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/191_0.php">Motociclismo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/172_0.php">Natación</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/187_0.php">Navegación a vela</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/183_0.php">Snowboard</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/185_0.php">Tenis</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/188_0.php">Voleibol</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/189_0.php">Waterpolo</a></li>
</ul>
</li>
<li><a href="#">Otros</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/18_0.php">Dicc. de Literatura y Lengua</a></li>
<li><a href="//www.definiciones-de.com/Definiciones/general_abreviaturas.php">Dicc. de Abreviaturas</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/32_0.php">Dicc. de Gentilicios</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/34_0.php">Diccionario de Cocina</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/29_0.php">Diccionario Militar</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/36_0.php">Diccionario de Ocultismo</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/35_0.php">Diccionario de N&aacute;utica</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/28_0.php">Dicc. Unidades de Medidas</a></li>
<li><a href="//en.definiciones-de.com/">Diccionario en inglés</a></li>
<li><a href="//nl.definiciones-de.com/">Diccionario en neerlandés</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/23_0.php">Diccionario de Mitología</a></li>
</ul>
</li>
<li><a href="#">Por Letra</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/L/a_0.php">Letra A</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/a_0.php">Letra B</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/b_0.php">Letra C</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/c_0.php">Letra D</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/d_0.php">Letra E</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/e_0.php">Letra F</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/f_0.php">Letra G</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/g_0.php">Letra H</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/h_0.php">Letra I</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/i_0.php">Letra J</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/k_0.php">Letra K</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/m_0.php">Letra M</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/n_0.php">Letra N</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/ñ_0.php">Letra Ñ</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/o_0.php">Letra O</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/p_0.php">Letra P</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/q_0.php">Letra Q</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/r_0.php">Letra R</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/s_0.php">Letra S</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/t_0.php">Letra T</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/u_0.php">Letra U</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/v_0.php">Letra V</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/w_0.php">Letra W</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/x_0.php">Letra X</a></li>
<li><a href="//www.definiciones-de.com/Definicion/L/y_0.php">Letra Y</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/L/z_0.php">Letra Z</a></li>
</ul>
</li>
<li><a href="#">País</a>
<ul>
<li class="top"><a href="//www.definiciones-de.com/Definicion/Cat/123_0.php">Argentinismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/142_0.php">Bolivianismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/139_0.php">Chilenismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/128_0.php">Colombianismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/127_0.php">Costarriqueñismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/145_0.php">Cubanismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/138_0.php">Dominicanismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/122_0.php">Ecuatorianismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/151_0.php">Españolismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/148_0.php">Estadounidismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/129_0.php">Guatemalismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/132_0.php">Hondureñismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/121_0.php">Mexicanismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/133_0.php">Nicaraguanismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/135_0.php">Panameñismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/136_0.php">Paraguayismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/144_0.php">Peruanismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/134_0.php">Puertorriqueñismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/137_0.php">Rioplatense</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/130_0.php">Salvadoreñismos</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/149_0.php">Spanglish</a></li>
<li><a href="//www.definiciones-de.com/Definicion/Cat/140_0.php">Uruguayismos</a></li>
<li class="bottom"><a href="//www.definiciones-de.com/Definicion/Cat/141_0.php">Venezonalismos</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div id="wrapper">
<div id="contenttop"></div>
<div id="content">
<div id="cabeceraAdicional">
<span id="titular" style="font-size:small; font-weight:bold;">Significado de cuadrícula | Sinónimos y oraciones con ejemplos de uso de cuadrícula</span></div>
<div id="abc">

<div id="popupContact">

<form action="#" method="post" id="formf">
<img src="../../Definiciones/3.png" id="close" onclick="if (!window.__cfRLUnblockHandlers) return false; div_hide()" data-cf-modified-c0cd6f957549d206bf81043a-="" />
<span id="hd2f">Envíanos un mensaje</span><hr id="hr2" />
<div id="texto"></div>
<input type="text" name="name" id="namef" placeholder="Nombre o apodo (público)" />
<input type="text" name="email" id="emailf" placeholder="Email (se mantendrá en privado)" />
<select name="pais" id="paisf" placeholder="Pais">
<option>Escoja un pa&iacute;s listado</option>
<option>Argentina</option>
<option>Chile</option>
<option>Colombia</option>
<option>Cuba</option>
<option>Ecuador</option>
<option>Espa&ntilde;a</option>
<option>M&eacute;xico</option>
<option>Per&uacute;</option>
<option>Venezuela</option>
<option>Uruguay</option>
<option>---------------------</option>
<option>Bolivia</option>
<option>Brasil</option>
<option>Costa Rica</option>
<option>El Salvador</option>
<option>EEUU</option>
<option>Guatemala</option>
<option>Hait&iacute;</option>
<option>Honduras</option>
<option>Nicaragua</option>
<option>Panam&aacute;</option>
<option>Paraguay</option>
<option>Rep. Dominicana</option>
<option>Puerto Rico</option>
<option>---------------------</option>
<option>Alemania</option>
<option>Australia</option>
<option>Canad&aacute;</option>
<option>China</option>
<option>Francia</option>
<option>Italia</option>
<option>Jap&oacute;n</option>
<option>Portugal</option>
<option>Reino Unido</option>
<option>Rusia</option>
<option>--- Continentes ---</option>
<option>&Aacute;frica</option>
<option>Asia</option>
<option>Ocean&iacute;a</option>
<option>Europa</option>
<option>Am&eacute;rica</option>
<option>Otro</option>
</select>
<textarea name="comentario" placeholder="Comentario o duda..." id="comentariof"></textarea>
<a id="submitf" href="javascript: check_empty(126823)">Enviar</a>
</form>
</div>

</div>
<div id="tituloDefinicion">
<h1 id="titular_principal">Definición de cuadrícula </h1>
</div>
<div id="categoria_bread">
<div style="padding-bottom:5px; padding-top:5px" itemscope itemtype="//schema.org/BreadcrumbList"><div itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem" style="float:left; padding-right:5px">
<a itemprop="item" href="//www.definiciones-de.com/index.php">
<span itemprop="name">Diccionario de Español</span></a> ›
<meta itemprop="position" content="1" />
</div><div itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem" style="float:left; padding-right:5px">
<a itemprop="item" href="//www.definiciones-de.com/Definiciones/general_categorias.php">
<span itemprop="name">&#128270; Categorías</span></a> ›
<meta itemprop="position" content="2" />
</div><div itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem" style="float:left; padding-right:5px">
<a itemprop="item" href="https://www.definiciones-de.com/Definicion/Cat/20_0.php">
<span itemprop="name">Matemáticas</span></a> ›
<meta itemprop="position" content="3" />
</div><div itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem" style="font-weight:bold">
<a itemprop="item" href="//www.definiciones-de.com/Definicion/de/cuadricula.php">
<span itemprop="name">cuadrícula</span></a>
<meta itemprop="position" content="4" />
</div></div> </div>
<div id="definicion">
<div id="informacion">
<div id="buscador">
<script defer type="c0cd6f957549d206bf81043a-text/javascript">
  (function() {
    var cx = '010989746700755995553:s-tlsu4x-h0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>
<div class="snips" style="float:right;"><strong>&nbsp;<a href="https://www.definiciones-de.com/Sinonimos/de/cuadri-cula.php">Sinónimos de cuadrícula</a> | <a href="#usos_snip" scrollTo="usos_snip" class="scrollOnClick">Usos de cuadrícula</a> | <a href="#etimologia_snip" scrollTo="etimologia_snip" class="scrollOnClick">Etimología de cuadrícula</a> | <a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">Comentar</a></strong></div>
<br />
<br />
<div style="float: right; margin: 3px; margin-top: 2px; margin-left: 10px; padding: 3px; border: 1px solid #aaa; background: #efefef;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="5685475188"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<strong>
<strong>Tabla de contenido</strong><ul id="tabla"><li><a href="#definicion_snip">Definición de cuadrícula</a></li><li><a href="#etimologia_snip">Etimología de cuadrícula</a><li><a href="https://www.definiciones-de.com/Sinonimos/de/cuadri-cula.php">Sinónimos de cuadrícula</a><li><a href="#usos_snip">Oraciones de ejemplos con "cuadrícula"</a></li><li><a href="#analisis_snip">Análisis de "cuadrícula" como palabra</a></li><li><a href="#cercanas_snip">Palabras cercanas a "cuadrícula"</a></li><li><a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">¿Dudas o consultas?</a></li></ul><br><br><a name="definicion_snip" class="anchor"></a><br>Definici&oacute;n de cuadrícula</strong><br />
<ol style="list-style:none">
<LI>f. Conjunto de cuadrados que resultan de cortarse perpendicularmente dos series de rectas paralelas. En otras palabras, es un dibujo de una red de líneas horizontales y verticales espaciadas uniformemente.<br />
<br />
Las cuadrículas pueden tener etiquetadas las filas y columnas para poder hacer referencia a un cuadrado específico en estas. Por ejemplo, las horizontales con números y las verticales con letras, por lo que, para ubicar un cuadrado específico, puede referenciarse con una letra y un número como B2, T4, A1, etc.<br />
<br />
<br />
<div id="comienza_imagen"><img itemprop="image" src="//www.definiciones-de.com/Imagen/cuadricula.png" width="60%" alt="Cuadrícula." class="imagenes_definicion" /><br />
<em>Cuadrícula.</em></div><br />
<br />
<h2 class="EstiloSubtitulos">Usos de las cuadrículas</h2> <br />
<br />
<b>En diseño, dibujo o escritura</b><br />
<br />
Dibujar o diseñar sobre una cuadrícula permite mantener las proporciones y ubicaciones. Actualmente cualquier aplicación de diseño en computadora permite mostrar u ocultar una cuadrícula para este fin.<br />
<br />
El papel milimetrado o cuadriculado permite dibujar con mayor precisión. También puede emplearse para medir lo que se apoye sobre este.<br />
<br />
<div id="comienza_imagen"><img itemprop="image" src="//www.definiciones-de.com/Imagen/papel-cuadriculado-imagen.jpg" width="40%" alt="Papel cuadriculado o milimetrado." class="imagenes_definicion" /><br />
<em>Papel cuadriculado o milimetrado.</em></div><br />
<br />
<br />
<b>Ejes cartesianos</b><br />
<br />
En ejes cartesianos se pueden emplear una cuadrícula para ayudar a dibujar gráficas o localizar puntos en estas.<br />
<br />
<div id="comienza_imagen"><img itemprop="image" src="//www.definiciones-de.com/Imagen/ejes-cartesianos-cuadricula.png" width="70%" alt="Ejes cartesianos x y z, con sus respectivas cuadrículas." class="imagenes_definicion" /><br />
<em>Ejes cartesianos x y z, con sus respectivas cuadrículas. <a href="https://es.m.wikipedia.org/wiki/Archivo:Cylindrical_with_grid.svg" rel="nofollow">Licencia CC.</a></em></div><br />
<br />
<br />
<b>Cuadrículas en mapas</b><br />
<br />
Muchas veces los mapas se dividen en cuadrículas para identificar ubicaciones en estos. En ocasiones son llamadas malla, rejilla o red de referencia.<br />
<br />
Los sistemas de cuadrícula varían, pero el más común es una cuadrícula cuadrada con líneas de cuadrícula que se intersectan entre sí en ángulos rectos y numeradas secuencialmente desde el origen en la parte inferior izquierda del mapa. Las referencias numéricas de la cuadrícula constan de un número par de dígitos. El este se escribe antes que el norte. Así, en una referencia de cuadrícula de 6 dígitos 123456, el componente del Este es 123 y el componente Norte es 456.<br />
<br />
Las cuadrículas pueden ser arbitrarias o pueden basarse en distancias específicas; por ejemplo, algunos mapas utilizan una cuadrícula de un kilómetro cuadrado.<br />
<br />
Una referencia de cuadrícula localiza una región cuadrada única en el mapa. La precisión de la ubicación varía, por ejemplo, un plan de urbanismo simple puede utilizar un sistema de cuadrícula simple con letras simples para el Este y números simples para el Norte. Una referencia de cuadrícula en este sistema, como H3, localiza una casilla en particular en lugar de un único punto.<br />
<br />
<br />
<b>Cuadrícula en el UTM</b><br />
<br />
El Universal Transverse Mercator (UTM) es un sistema para asignar coordenadas a lugares en la superficie de la Tierra. Al igual que el método tradicional de latitud y longitud, es una representación de posición horizontal, lo que significa que ignora la altitud y trata a la tierra como un elipsoide perfecto. Sin embargo, difiere de la latitud/longitud global en que divide la tierra en 60 zonas y proyecta cada una hacia el plano como base para sus coordenadas. Especificar una ubicación significa especificar la zona y la coordenada x, y en ese plano. La proyección de esferoides a una zona UTM es una parametrización de la proyección transversal de Mercator. Los parámetros varían según la nación, la región o el sistema cartográfico.<br />
<br />
<div id="comienza_imagen"><img itemprop="image" src="//www.definiciones-de.com/Imagen/zonas-utm-sudamerica.png" width="95%" alt="Mapa de América del Sur, que muestra las zonas de latitud y longitud del sistema de coordenadas en:Universal Transverse Mercator, de 15F a 25Q." class="imagenes_definicion" /><br />
<em>Mapa de América del Sur, que muestra las zonas de latitud y longitud del sistema de coordenadas en:Universal Transverse Mercator, de 15F a 25Q.</em></div><br />
<br />
<br />
<b>Cuadrícula en el MGRS</b><br />
<br />
El MGRS (Military Grid Reference System) es el estándar de geocoordinación utilizado por los militares de la OTAN para localizar puntos en cualquier lugar de la Tierra. Un ejemplo de una coordenada MGRS, o referencia de cuadrícula, sería 4QFJ12345678, que consta de tres partes: 4Q (indicador de zona de cuadrícula, GZD), FJ (el identificador cuadrado de 100.000 metros) y 12345678 (ubicación numérica; el este es 1234 y el norte es 5678, en este caso especificando una ubicación con una resolución de 10 m).<br />
<br />
<div id="comienza_imagen"><img itemprop="image" src="//www.definiciones-de.com/Imagen/mgrs.png" width="95%" alt="La cuadrícula de MGRS alrededor de Hawaii. Honolulu se encuentra el cuadrado de 10 km que se llama 4QFJ15." class="imagenes_definicion" /><br />
<em>La cuadrícula de MGRS alrededor de Hawaii. Honolulu se encuentra el cuadrado de 10 km que se llama 4QFJ15. <a href="https://en.wikipedia.org/wiki/File:MGRSgridHawaiiSchemeAARealigned.png" rel="nofollow">Licencia CC.</a></em></div><br /><br /><div><a name="etimologia_snip" id="etimologia_snip" class="anchor"></a><em>Origen de la palabra: (De cuadro.)</em></div></ol>
Actualizado: 13/06/2019 - Autor: <a href="https://www.definiciones-de.com/Definiciones/general_autor.php">Leandro Alegsa</a>
<br /><br /><br />
<div class="antes" style="float:left; background-color:#DDDDDD"><strong>&#x2190; <a href="https://www.definiciones-de.com/Definicion/de/cuadriciclo.php">cuadriciclo</a>&nbsp;</strong></div>
<div class="antes" style="float:right; background-color:#DDDDDD"><strong>&nbsp;<a href="https://www.definiciones-de.com/Definicion/de/cuadricular.php">cuadricular</a> &#x2192;</strong></div>
<br />
<a name="sinonimos_snip" id="sinonimos_snip" class="anchor"></a>
<div class="seccion_titular">Sinónimos y antónimos de cuadrícula</div><div id="alternating-content"><div class="item"><strong>Sinónimos de cuadrícula</strong>: <a href="https://www.definiciones-de.com/Sinonimos/de/ajedrezado.php">ajedrezado</a><br></div>Ver todos los sinónimos, antónimos y palabras relacionadas aquí: <a href="https://www.definiciones-de.com/Sinonimos/de/cuadri-cula.php">cuadrícula</a></div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="2373076785"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br /><a name="video_snip" id="video_snip" class="anchor"></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>
<script src="https://www.definiciones-de.com/scripts/jquery.rateit.min.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>
<script type="c0cd6f957549d206bf81043a-text/javascript">
function buttonclick(src, movil, ip) {

  $.ajax({
             url: '../../Definiciones/registrar_clic.php',
             data: { src: src, movil: movil, ip: ip},
             type: 'POST',
             success: function (data) {

             }
	     });
}
</script>
<a name="calificar_snip" id="calificar_snip" class="anchor"></a>
<style type="text/css">
#response
{
	margin-top:10px;
	margin-bottom:3px;
}
div.bigstars div.rateit-range
{
    background: url(../../scripts/star-white32.png);
    height: 32px;
}
 
div.bigstars div.rateit-hover
{
    background: url(../../scripts/star-gold32.png);
}
 
div.bigstars div.rateit-selected
{
    background: url(../../scripts/star-red32.png);
}
 
div.bigstars div.rateit-reset
{
    background: url(../../scripts/star-black32.png);
    width: 32px;
    height: 32px;
}
 
div.bigstars div.rateit-reset:hover
{
    background: url(../../scripts/star-white32.png);
}
</style><div class="seccion_titular"><strong>¿Mejoramos la definición?</strong></div><div class="seccion_cuerpo"> <div id="votacion">
<div data-productid="126823" data-rateit-starwidth="32" data-rateit-starheight="32" data-rateit-resetable="false" data-rateit-step=1 class="rateit bigstars" style="float:left"></div>
<div id="estadisticas" style="float:left; margin-top:4px; margin-left:10px"> Puntos: 2.8 (45 votos)</div><br />
<div id="response"></div>
</div><script defer type="c0cd6f957549d206bf81043a-text/javascript">
     $('#votacion .rateit').bind('rated reset', function (e) {
         var ri = $(this);
         var value = ri.rateit('value');
         var productID = ri.data('productid');
 
         ri.rateit('readonly', true);
 
         $.ajax({
             url: '../../Definiciones/rateit.php',
             data: { id: productID, value: value, enciclopedico: 1},
             type: 'POST',
             success: function (data) {
				 $('#response').text('');
                 $('#response').append(data);
 
             },
             error: function (jxhr, msg, err) {
                 $('#response').append(msg);
             }
         });
     });
	 
	 $('#votacion').bind('over', function (event, value){
		 
		 switch (value) {
    case 0:
         $('#response').text('');
        break;
    case 1:
         $('#response').text('¡Mejorar URGENTE la definición!');
        break;
    case 2:
         $('#response').text('¡Mejorar a la brevedad la definición!');
        break;
    case 3:
         $('#response').text('Está bien, pero puede mejorar');
        break;
    case 4:
         $('#response').text('Bien, está completa');
        break;
    case 5:
         $('#response').text('¡Excelente! resuelve mis dudas y más');
        break;
		}	
		 
		 });
 </script></div>
<div></div>
<a name="usos_snip" id="usos_snip" class="anchor"></a>
<div class="seccion_titular">Ejemplos de oraciones con <u>cuadrícula</u> (y derivados)</div><div id="alternating-content"><div class="item">
&bull; <span id="frasesita0" class="frasesita">&laquo; En el 64 CE, un enorme incendio casi destruyó la ciudad, que estaba construida en gran parte de madera. Esto dio lugar a la leyenda de Nerón "tocando su violín mientras Roma ardía" - de hecho, después del incendio Nerón mandó construir refugios para los sin techo y se puso a reconstruir la mitad de la ciudad que había sido destruida, utilizando edificios de hormigón y calles en <strong>cuadrícula</strong>. &raquo;</span><br><div id="explicacion_extra0" class="explicacion_extra"><a href="#0" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buscaUnidadContextual(1328,0,'cuadrícula','43034')" data-cf-modified-c0cd6f957549d206bf81043a-="">Leer m&aacute;s del contexto</a>...</div><div id="texto0" class="textos_frases">
</div>
</div><div class="item">
&bull; <span id="frasesita1" class="frasesita">&laquo; Angkor tenía un vasto sistema de <strong>cuadrículas</strong>, con caminos, templos, jardines y plazas que albergaban a un millón de personas. &raquo;</span><br><span id="explicacion1" class="explicacion">(de cuadrícula | plural)</span><br><div id="explicacion_extra1" class="explicacion_extra"><a href="#1" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buscaUnidadContextual(1296,1,'cuadrícula','36563')" data-cf-modified-c0cd6f957549d206bf81043a-="">Leer m&aacute;s del contexto</a>...</div><div id="texto1" class="textos_frases">
</div>
</div><div class="item">
&bull; <span id="frasesita2" class="frasesita">&laquo; Construyeron estas ciudades según el modelo helenístico y romano: <strong>cuadrículas</strong> planificadas de calles en ángulo recto. &raquo;</span><br><span id="explicacion2" class="explicacion">(de cuadrícula | plural)</span><br><div id="explicacion_extra2" class="explicacion_extra"><a href="#2" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buscaUnidadContextual(1331,2,'cuadrícula','43922')" data-cf-modified-c0cd6f957549d206bf81043a-="">Leer m&aacute;s del contexto</a>...</div><div id="texto2" class="textos_frases">
</div>
</div><div class="item">
&bull; <span id="frasesita3" class="frasesita">&laquo; El patrón de <strong>cuadrícula</strong> geométrica establecido por la ordenanza sigue siendo evidente hoy en día en el paisaje estadounidense. De hecho, gran parte del oeste de Estados Unidos, visto desde un avión, está compuesto por un sistema de <strong>cuadrícula</strong> ordenado. &raquo;</span><br><div id="explicacion_extra3" class="explicacion_extra"><a href="#3" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buscaUnidadContextual(1372,3,'cuadrícula','52341')" data-cf-modified-c0cd6f957549d206bf81043a-="">Leer m&aacute;s del contexto</a>...</div><div id="texto3" class="textos_frases">
</div>
</div><div class="item">
&bull; <span id="frasesita4" class="frasesita">&laquo; Cada ciudad construida por los romanos en su territorio conquistado fue trazada de acuerdo a planes cuidadosos, con calles construidas en <strong>cuadrículas</strong> y centradas en un foro público con edificios públicos. &raquo;</span><br><span id="explicacion4" class="explicacion">(de cuadrícula | plural)</span><br><div id="explicacion_extra4" class="explicacion_extra"><a href="#4" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buscaUnidadContextual(1328,4,'cuadrícula','43186')" data-cf-modified-c0cd6f957549d206bf81043a-="">Leer m&aacute;s del contexto</a>...</div><div id="texto4" class="textos_frases">
</div>
</div></div><div class="seccion_titular" style="background-color:#E1E0E0">Leer más ejemplos de <a href="https://www.definiciones-de.com/Oraciones/cuadricula.php">oraciones con cuadrícula</a></div>
<style type="text/css" media="all">

#categorias_relacionadas{
	height: 110px;
	overflow-x: auto;
	overflow-y: hidden;
	white-space: nowrap;
}

#cat_rel{
	display: inline-block;
	margin-right:15px;
	width: auto;
	height: 70px; 
	flex-shrink: 0;
}

#cat_rel_imagen{
	text-align:center;	
}
#cat_rel_texto{
	text-align:center;
	font-weight:bold;
}

</style>
<div class="seccion_titular">Diccionarios relacionados</div><div class="seccion_cuerpo"><div id="categorias_relacionadas"><div id="cat_rel">
<div id="cat_rel_imagen">
<a href="https://www.definiciones-de.com/Definicion/Cat/20_0.php"><img src="https://www.definiciones-de.com/Definiciones/thumb/60x60/matematicas.png" width="60" height="60" alt="" /></a>
</div>
<div id="cat_rel_texto">
<a href="https://www.definiciones-de.com/Definicion/Cat/20_0.php">Matemáticas</a>
</div>
</div><div id="cat_rel">
<div id="cat_rel_imagen">
<a href="https://www.definiciones-de.com/Definicion/Cat/146_0.php"><img src="https://www.definiciones-de.com/Definiciones/thumb/60x60/sustantivo.png" width="60" height="60" alt="" /></a>
</div>
<div id="cat_rel_texto">
<a href="https://www.definiciones-de.com/Definicion/Cat/146_0.php">Sustantivos</a>
</div>
</div></div></div>
<div class="seccion_titular">
Compartir la definición, preguntar y buscar
</div>
<div class="seccion_cuerpo">
<style type="text/css" media="all">
#whatsapp{background-color:#4dc247;float:right;}

#facebook{background-color:#3b5998; float:right;}

#instagram{background-color:#cd486b; float:right; }

#twitter{background-color:#55acee;float:right;}

#google{background-color:#dd4b39;float:right;}

#email{background-color:#8E8E8E;float:right;}

#comment{background-color:#CBCA54;float:right;}

#lupa{background-color:#E54AB4;	float:right;}

#link{background-color:#FF484B; float:right;}

.compartir{width: 40px; height: 40px; border-radius: 50%; margin-left:3px;text-align: center;}

.compartir img{  margin-top:5px;}

#cuadro-compartir{
	
	padding-bottom:50px;
	
	}
</style>
<script type="c0cd6f957549d206bf81043a-text/javascript">
function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = window.location.href;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
alert("Direccion web copiada al portapapeles.");
}

</script>
<div id="cuadro-compartir">
<div style="float:left; padding-top:8px; color:#4A4A4A;"><b>Compartir</b></div>
<div id="link" class="compartir">
<a title="E-mail" href="#a" onclick="if (!window.__cfRLUnblockHandlers) return false; copyToClipboard();" data-cf-modified-c0cd6f957549d206bf81043a-=""><img border="0" src="https://www.definiciones-de.com/scripts/link.svg" alt="Copiar enlace" width="30px" height="30px" /></a>
</div>
<div id="email" class="compartir">
<a title="E-mail" href="#a" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:window.location='mailto:?subject='+document.title+'&body='+document.title+' - '+window.document.URL;" data-cf-modified-c0cd6f957549d206bf81043a-=""><img border="0" src="https://www.definiciones-de.com/scripts/correo.svg" alt="E-mail" width="30px" height="30px" /></a>
</div>
<div id="twitter" class="compartir">
<a href="javascript:window.open('https://twitter.com/intent/tweet?url='+window.document.URL, 'newwindow', 'width=500, height=250')" title="Twitter"><img border="0" src="https://www.definiciones-de.com/scripts/twitter.svg" alt="Twitter" width="30px" height="30px" /></a>
</div>
<div id="facebook" class="compartir">
<a href="javascript:window.open('https://www.facebook.com/sharer.php?u='+window.document.URL, 'newwindow', 'width=500, height=250')" title="Facebook"><img border="0" src="https://www.definiciones-de.com/scripts/facebook.svg" alt="Facebook" width="30px" height="30px" /></a>
</div>
<div id="whatsapp" class="compartir">
<a title="Enviar por whatsapp" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:window.location='whatsapp://send?text='+document.title+' - '+window.document.URL;" data-cf-modified-c0cd6f957549d206bf81043a-=""><img border="0" src="https://www.definiciones-de.com/scripts/whatsapp.svg" alt="Whatsapp" width="30px" height="30px" /></a>
</div>
</div>
<div id="cuadro-compartir">
<div style="float:left; padding-top:8px; color:#4A4A4A;"><b>Buscar y comentar</b></div>
<div id="comment" class="compartir">
<a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-=""><img src="https://www.definiciones-de.com/scripts/chat.svg" alt="Comentar" width="30px" height="30px" /></a>
</div>
<div id="lupa" class="compartir">
<a href="https://www.definiciones-de.com/mbuscar.php"><img src="https://www.definiciones-de.com/scripts/lupa.svg" alt="Buscar" width="30px" height="30px" /></a>
</div>
</div></div>
<div class="seccion_titular">Fuentes bibliográficas y más información de cuadrícula:</div><div class="seccion_cuerpo">[ <a href="https://www.google.com/search?hl=es&gl=us&tbm=nws&authuser=0&q=%22cuadrícula%22" target="_blank" rel="noopener">M&aacute;s ejemplos de <strong>oraciones</strong> y <strong>usos</strong> de &quot;cuadrícula&quot;</a> ] <br> [ <a href="https://www.google.com/search?q=%22cuadrícula%22&hl=es&authuser=0&tbm=isch" target="_blank" rel="noopener"><strong>Im&aacute;genes</strong> relacionadas a &quot;cuadrícula&quot;</a> ] <br> [ <a href="https://www.google.com/search?q=cuadrícula&tbm=bks&hl=es#q=cuadrícula&hl=es&tbas=0&tbm=bks&tbs=lr:lang_1es&lr=lang_es" target="_blank" rel="noopener">Usos en <strong>libros</strong> de &quot;cuadrícula&quot;</a> ]</div>
<a name="analisis_snip" class="anchor"></a>
<div class="seccion_titular">Análisis de cuadrícula</div><div class="seccion_cuerpo">Se emplea como: <b>sustantivo femenino</b><br />La palabra cuadrícula tiene <b>4 sílabas</b>.<br />Separación en sílabas de cuadrícula: <b>cua-drí-cu-la</b><br />Tiene su acento gráfico (tilde) en la sílaba: <b>drí</b><br />Tipo de acentuación de cuadrícula: <b>Palabra esdrújula (también proparoxítona).</b><br />Posee diptongo creciente ua.<br>Palabra inversa: <b>alucírdauc</b><br />Número de letras: <b>10</b><br />Posee un total de 5 vocales: <b>u a í u a </b><br />Y un total de 5 consonantes: <b>c d r c l </b><br /><br />¿Es aceptada "cuadrícula" en el diccionario de la RAE? Comparar con la RAE: <a target="_blank" href="https://dle.rae.es/?w=cuadrÃ­cula" rel="nofollow" rel="noopener">cuadrícula (RAE)</a><br /><br /><strong>Diccionarios relacionados: </strong><a href="//www.definiciones-de.com/Definicion/Cat/20_0.php">Matemáticas</a> - <a href="//www.definiciones-de.com/Definicion/Cat/146_0.php">Sustantivos</a></div>
<br />
<div id="abreviaturas">
</div>
<table width="100%" border="0">
<tbody>
<tr>
<td valign="top">
<a name="cercanas_snip" id="cercanas_snip" class="anchor"></a>
<div class="seccion_titular">Palabras cercanas</div><div class="seccion_cuerpo"><ul><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrangular.php">cuadrangular </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrante.php">cuadrante </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrar.php">cuadrar </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadratura.php">cuadratura </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrete.php">cuadrete </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadri.php">cuadri </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadribasico.php">cuadribásico (cuadribásica)</a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadricenal.php">cuadricenal </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadriceps.php">cuadríceps </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadriciclo.php">cuadriciclo </a><LI> <strong> &raquo; cuadrícula</strong><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadriculado.php">cuadriculado (cuadriculada)</a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadricular.php">cuadricular </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadridimensional.php">cuadridimensional </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrienal.php">cuadrienal </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadrienio.php">cuadrienio </a><LI> <a href="https://www.definiciones-de.com/Definicion/de/cuadriga.php">cuadriga </a></ul></div>
</td>
<td valign="top"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="1193781582"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script></td>
</tr>
</tbody>
</table>
<br />
<a name="abreviaturas_snip" id="abreviaturas_snip" class="anchor"></a>
<div class="seccion_titular"><strong>Abreviaturas empleadas en la definición</strong></div><div class="seccion_cuerpo">f. = sustantivo femenino<br><a href="https://www.definiciones-de.com/Definiciones/general_abreviaturas.php">M&aacute;s abreviaturas</a>...</div>
<div id="usos_externos">
</div>
<a name="citar_snip" id="citar_snip" class="anchor"></a>
<div class="seccion_titular"><strong>Cómo citar la definición</strong></div><div class="seccion_cuerpo"> Definiciones-de.com (2019). <em><a href="https://www.definiciones-de.com/Definicion/de/cuadricula.php">Definici&oacute;n de cuadrícula</a></em> - <a href="https://www.definiciones-de.com/Definiciones/general_autor.php">Leandro Alegsa</a> © 13/06/2019 url: https://www.definiciones-de.com/Definicion/de/cuadricula.php</div>
<br />
<strong>¿Preguntas sobre el significado de esta palabra?: </strong><a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">respondemos aqu&iacute;</a><br />
<div id="relacionados">
<hr><br />
<a name="imagen_snip" id="imagen_snip" class="anchor"></a>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:468px;height:15px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="2530913985"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<br />
[ <a href="https://www.google.com/search?q=%22cuadrícula%22&hl=es&authuser=0&tbm=isch" target="_blank" rel="noopener"><strong>Im&aacute;genes</strong> relacionadas a &quot;cuadrícula&quot;</a> ]<br />
<div itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="license" content="https://creativecommons.org/licenses/by-sa/4.0">
<meta itemprop="acquireLicensePage" content="https://creativecommons.org/licenses/by-sa/4.0">
<meta itemprop="representativeOfPage" content="1">
<meta itemprop="inLanguage" content="es-419">
<meta itemprop="contentUrl" content="//www.definiciones-de.com/preimagen/126823.png">
<meta itemprop="isFamilyFriendly" content="1"><img itemprop="image" src="" realsrc="//www.definiciones-de.com/preimagen/126823.png" width="95%" alt="cuadrícula " /><br /><em>Esta imagen puedes emplearla con fines didácticos en la escuela, institución educativa o proyectos web.</em></div>
<script type="c0cd6f957549d206bf81043a-text/javascript">
        refresh_handler = function(e) {
        var frames = document.querySelectorAll("*[realsrc]");
        for (var i = 0; i < frames.length; i++) {
                var boundingClientRect = frames[i].getBoundingClientRect();
                if (frames[i].hasAttribute("realsrc") && boundingClientRect.top < window.innerHeight) {
                    frames[i].setAttribute("src", frames[i].getAttribute("realsrc"));
                    frames[i].removeAttribute("realsrc");
                }
            }
        };

        window.addEventListener('scroll', refresh_handler);
        window.addEventListener('load', refresh_handler);
    </script>
<a name="comentarios_snip" id="comentarios_snip" class="anchor"></a>
<br />
</div>
<div id="menuDerecha">
<style type="text/css" media="all">

#whatsapp2{
	background-color:#4dc247;
	float:right;
}

#facebook2{
	background-color:#3b5998;
	float:right;
}

#instagram2{
	background-color:#cd486b;
	float:right;
}

#twitter2{
	background-color:#55acee;
	float:right;
}

#google2{
	background-color:#dd4b39;
	float:right;
}

#email2{
	background-color:#8E8E8E;
	float:right;
}

#comment2{
	background-color:#CBCA54;
	float:right;
}

#lupa2{
	background-color:#E54AB4;
	float:right;
}

.compartir2{
    width: 40px;
    height: 40px;
    border-radius: 50%;
	margin-left:3px;
	text-align: center;
}

.compartir2 img{
    margin-top:5px;
}

#contenedor2{
	height:43px;
	background-color:#787878;
	padding-top:5px;
	padding-bottom:5px;
	padding-right:5px;
}

</style>
<div id="contenedor2">
<div id="lupa2" class="compartir2">
<a href="https://www.definiciones-de.com/buscar.php"><img src="//www.definiciones-de.com/scripts/lupa.svg" alt="Buscar" width="30px" height="30px" /></a>
</div>
<div id="comment2" class="compartir2">
<a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" title="Escribir comentario" data-cf-modified-c0cd6f957549d206bf81043a-=""><img src="//www.definiciones-de.com/scripts/chat.svg" alt="Comentar" width="30px" height="30px" /></a>
</div>
<div id="twitter2" class="compartir2">
<a href="https://www.twitter.com/diccionariono" target="new" title="Twitter: El diccionario no muerde"><img border="0" src="//www.definiciones-de.com/scripts/twitter.svg" alt="Twitter" width="30px" height="30px" /></a>
</div>
<div id="facebook2" class="compartir2">
<a href="https://www.facebook.com/definicionesde" target="new" title="Definciones-de"><img border="0" src="//www.definiciones-de.com/scripts/facebook.svg" alt="Facebook" width="30px" height="30px" /></a>
</div>
<div id="instagram2" class="compartir2">
<a href="https://www.instagram.com/el_diccionario_no_muerde" target="new" title="Instagram: diccionario no muerde"><img border="0" src="//www.definiciones-de.com/scripts/instagram-blanco.svg" alt="Instagram" width="30px" height="30px" /></a>
</div>
</div>
<p>
<div id="cabecera"><a href="http://www.definiciones-de.com/index.php">Diccionario General de Espa&ntilde;ol</a></div>
<div id="busqueda"><strong>Buscar por letra:</strong> <a href="http://www.definiciones-de.com/Definicion/L/a_0.php" title="Letra A">A</a> - <a href="http://www.definiciones-de.com/Definicion/L/b_0.php" title="Letra B">B</a> - <a href="http://www.definiciones-de.com/Definicion/L/c_0.php" title="Letra C">C</a> - <a href="http://www.definiciones-de.com/Definicion/L/d_0.php" title="Letra D">D</a> - <a href="http://www.definiciones-de.com/Definicion/L/e_0.php" title="Letra E">E</a> - <a href="http://www.definiciones-de.com/Definicion/L/f_0.php" title="Letra F">F</a> - <a href="http://www.definiciones-de.com/Definicion/L/g_0.php" title="Letra G">G</a> - <a href="http://www.definiciones-de.com/Definicion/L/h_0.php" title="Letra H">H</a> - <a href="http://www.definiciones-de.com/Definicion/L/i_0.php" title="Letra I">I</a> - <a href="http://www.definiciones-de.com/Definicion/L/j_0.php" title="Letra J">J</a> - <a href="http://www.definiciones-de.com/Definicion/L/k_0.php" title="Letra K">K</a> - <a href="http://www.definiciones-de.com/Definicion/L/l_0.php" title="Letra L">L</a> - <a href="http://www.definiciones-de.com/Definicion/L/m_0.php" title="Letra M">M</a> - <a href="http://www.definiciones-de.com/Definicion/L/n_0.php" title="Letra N">N</a> - <a href="http://www.definiciones-de.com/Definicion/L/&ntilde;_0.php" title="Letra &Ntilde;">&Ntilde;</a> - <a href="http://www.definiciones-de.com/Definicion/L/o_0.php" title="Letra O">O</a> - <a href="http://www.definiciones-de.com/Definicion/L/p_0.php" title="Letra P">P</a> - <a href="http://www.definiciones-de.com/Definicion/L/q_0.php" title="Letra Q">Q</a> - <a href="http://www.definiciones-de.com/Definicion/L/r_0.php" title="Letra R">R</a> - <a href="http://www.definiciones-de.com/Definicion/L/s_0.php" title="Letra S">S</a> - <a href="http://www.definiciones-de.com/Definicion/L/t_0.php" title="Letra T">T</a> - <a href="http://www.definiciones-de.com/Definicion/L/u_0.php" title="Letra U">U</a> - <a href="http://www.definiciones-de.com/Definicion/L/v_0.php" title="Letra V">V</a> - <a href="http://www.definiciones-de.com/Definicion/L/w_0.php" title="Letra W">W</a> - <a href="http://www.definiciones-de.com/Definicion/L/x_0.php" title="Letra X">X</a> - <a href="http://www.definiciones-de.com/Definicion/L/y_0.php" title="Letra Y">Y</a> - <a href="http://www.definiciones-de.com/Definicion/L/z_0.php" title="Letra Z">Z</a> - <a href="http://www.definiciones-de.com/index.php">Indice</a><br />
<br />
<strong>Buscar por categor&iacute;a: <a href="http://www.definiciones-de.com/Definicion/Cat/16_0.php">Anatom&iacute;a</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/6_0.php">Biolog&iacute;a</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/7_0.php">Bot&aacute;nica</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/13_0.php">F&iacute;s. y Qu&iacute;m</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/4_0.php">Literatura</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/10_0.php">Medicina</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/8_0.php">Religi&oacute;n</a> - <a href="http://www.definiciones-de.com/Definicion/Cat/12_0.php">Zoolog&iacute;a</a> - <a href="http://www.definiciones-de.com/Definiciones/general_categorias.php">m&aacute;s categor&iacute;as</a></strong><br />
<br />
<table width="100%" border="0">
<tr>
<td width="50%" valign="top"><div>
<strong> Buscar por palabra o frase:</strong><br>
<div id="buscador">
<script type="c0cd6f957549d206bf81043a-text/javascript">
  (function() {
    var cx = '010989746700755995553:s-tlsu4x-h0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>
</td>
</tr>
</table>
</div> </p>
<p>
<script type="c0cd6f957549d206bf81043a-text/javascript">
function buttonclick(src, movil, ip) {

  $.ajax({
             url: '../../../Definiciones/registrar_clic.php',
             data: { src: src, movil: movil, ip: ip},
             type: 'POST',
             success: function (data) {

             }
	     });
}
</script>
<script type="c0cd6f957549d206bf81043a-text/javascript">
        refresh_handler = function(e) {
        var frames = document.querySelectorAll("*[realsrc]");
        for (var i = 0; i < frames.length; i++) {
                var boundingClientRect = frames[i].getBoundingClientRect();
                if (frames[i].hasAttribute("realsrc") && boundingClientRect.top < window.innerHeight) {
                    frames[i].setAttribute("src", frames[i].getAttribute("realsrc"));
                    frames[i].removeAttribute("realsrc");
                }
            }
        };

        window.addEventListener('scroll', refresh_handler);
        window.addEventListener('load', refresh_handler);
    </script>
<div style="left: 10px; top: 60px;"> <a href="https://www.instagram.com/el_diccionario_no_muerde"><img id="gimper_img" src="" realsrc="https://www.definiciones-de.com/Definiciones/ads/arrebol3.jpg" width="300" height="300" alt="Instagram: El Diccionario No Muerde" border="5" onclick="if (!window.__cfRLUnblockHandlers) return false; buttonclick('arrebol3.jpg', 1, '66.249.73.141');" data-cf-modified-c0cd6f957549d206bf81043a-=""></a>
</div>
<strong><br>
NOVEDAD: ¡Síguenos en nuestras redes!</strong>
<br>
Para aprender nuevas palabras, cómo escribir mejor, concursos y cultura general.
<div style="margin-top:40px;">
<div style="margin-top:20px; margin-left:5px;"><a href="https://www.instagram.com/el_diccionario_no_muerde" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buttonclick('arrebol3.jpg', 1, '66.249.73.141');" data-cf-modified-c0cd6f957549d206bf81043a-=""><img src="" realsrc="https://www.definiciones-de.com/scripts/instagram-diccionario.png" width="285" height="35" align="middle" alt="Instagram" /></a> <img src="https://www.definiciones-de.com/Definiciones/click-here-small.gif" align="middle" width="30" height="41" alt="nuevo" /></div>
<div style="margin-top:15px; margin-left:5px; margin-bottom:20px;"><a href="https://www.twitter.com/diccionariono" rel="nofollow" onClick="if (!window.__cfRLUnblockHandlers) return false; buttonclick('arrebol3.jpg', 1, '66.249.73.141');" data-cf-modified-c0cd6f957549d206bf81043a-=""><img src="" realsrc="https://www.definiciones-de.com/scripts/twitter-diccionario.png" width="285" height="31" align="middle" alt="Instagram" /></a> <img src="https://www.definiciones-de.com/Definiciones/click-here-small.gif" align="middle" width="30" height="41" alt="nuevo" /></div>
</div>
</p>
<p>&nbsp;</p>
<p style="color:red"><strong>¿Hay un error o desea enviarnos un mensaje?: </strong><a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">enviar mensaje</a><br />
</p>
<br />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>

<ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3095760207849977" data-ad-slot="6367403983"></ins>
<script type="c0cd6f957549d206bf81043a-text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br />
<div class="seccion_titular">
Diccionarios relacionados
</div><div class="container_relacionado"><div class="categoria_relacionada">
<div class="imagen_categoria">
<img src="https://www.definiciones-de.com/Definiciones/thumb/matematicas.png" width="60" alt="" /> </div>
<div class="texto_categoria">
<strong><a href="//www.definiciones-de.com/Definicion/Cat/20_0.php">Matemáticas</a></strong></div>
</div></div>
</p>
<br />
<br />
<p>
<div class="seccion_titular">¡Vamos a jugar! Elige las opciones correctas</div><style type="text/css" media="all">
	.cuadroOracion{
		background-color:#9C9C9C;		padding-top:20px;
		padding-bottom:20px;
		padding-left:15px;
		padding-right:5px;
		margin-top:5px;
		margin-bottom:5px;
		display: flex;
	}
	.oracionJuego {
		float:left;
		width:87%;
	}
	.respuesta{
		padding-left:5px;
		width:35px;
	}
	#resultadoFinal{
		padding-left:10px;
	}

.myButton {
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	background-color:#f9f9f9;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-weight:bold;
	padding:1px 16px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	background-color:#e9e9e9;
}
.myButton:active {
	position:relative;
	top:1px;
}

.myButtonGreen {
	box-shadow:inset 0px 1px 0px 0px #3dc21b;
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	background-color:#44c767;
	border-radius:6px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-weight:bold;
	padding:1px 16px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}

.myButtonRed {
	box-shadow:inset 0px 1px 0px 0px #e00000;
	background:linear-gradient(to bottom, #ff0000 5%, #e61717 100%);
	background-color:#ff0000;
	border-radius:6px;
	border:1px solid #ff0505;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-weight:bold;
	padding:1px 16px;
	text-decoration:none;
	text-shadow:0px 1px 0px #f7005b;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="c0cd6f957549d206bf81043a-text/javascript"></script>
<script defer type="c0cd6f957549d206bf81043a-text/javascript">
var $totalOraciones;
var $respondidas;
var $correctas;

$totalOraciones = 3;
$respondidas = 0;
$correctas = 0;

function EligeOpcion($valor,$elemento,$pregunta)
{

	if ($valor==1)
		{
			$("#boton"+$elemento).prop('class','myButtonGreen');
			$("#boton"+$elemento).prop("onclick", null).off("click");
			$("#respuesta"+$pregunta).append('<img src="https://www.definiciones-de.com/scripts/ok.svg" width="30px" height="30px" alt="ok"/>');
			$respondidas = $respondidas+1;
			$correctas = $correctas+1;
		} 
		else
		{
			$("#boton"+$elemento).prop('class','myButtonRed');
			$("#boton"+$elemento).prop("onclick", null).off("click");
			$("#respuesta"+$pregunta).append('<img src="https://www.definiciones-de.com/scripts/no.svg" width="30px" height="30px" alt="ok"/>');
			$respondidas = $respondidas+1;
		}
		
		$(".pregunta"+$pregunta).prop("onclick", null).off("click");

	if ($totalOraciones==$respondidas)	{
		$("#textoResultadoFinal").append('Respondiste correctamente <strong>'+$correctas+' de '+$totalOraciones+'</strong> ');
		
		if ($correctas==$totalOraciones) {
			$("#textoResultadoFinal").append('<strong>Excelente</strong>');
		}
		
		$("#resultadoFinal").css("display", "block");
		$("#cuadroOracionFinal").css("display", "block");
		
		$.ajax({
             url: 'https://www.definiciones-de.com/Definiciones/juego_completado.php',
             data: { idjuego: 5},
             type: 'POST'
	     });
	}
};
</script>
<div class="cuadroOracion">
<div class="oracionJuego"><a href="#a" id="boton1" class="myButton pregunta1" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(0,1,1)" data-cf-modified-c0cd6f957549d206bf81043a-="">Abrá</a> <a href="#a" id="boton2" class="myButton pregunta1" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(1,2,1)" data-cf-modified-c0cd6f957549d206bf81043a-="">Habrá</a> una cena esta noche en su honor.</div><div id="respuesta1" class="respuesta"></div>
</div><div class="cuadroOracion">
<div class="oracionJuego">¡<a href="#a" id="boton3" class="myButton pregunta2" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(0,3,2)" data-cf-modified-c0cd6f957549d206bf81043a-="">Habra</a> <a href="#a" id="boton4" class="myButton pregunta2" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(1,4,2)" data-cf-modified-c0cd6f957549d206bf81043a-="">Abra</a> la puerta que estoy afuera!</div><div id="respuesta2" class="respuesta"></div>
</div><div class="cuadroOracion">
<div class="oracionJuego">¿<a href="#a" id="boton5" class="myButton pregunta3" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(1,5,3)" data-cf-modified-c0cd6f957549d206bf81043a-="">Habrá</a> <a href="#a" id="boton6" class="myButton pregunta3" onClick="if (!window.__cfRLUnblockHandlers) return false; EligeOpcion(0,6,3)" data-cf-modified-c0cd6f957549d206bf81043a-="">Abrá</a> oído lo que dije?</div><div id="respuesta3" class="respuesta"></div>
</div>
<div id="cuadroOracionFinal" class="cuadroOracion" style="display:none;">
<div id="resultadoFinal" style="display:none;">
<div id="textoResultadoFinal"></div>
<div id="leerMasJuego"><br />Explicaciones: <a href="https://www.definiciones-de.com/Nota/5.php">Habrá, abra, habré, abre, habrán, abran ¿Cómo diferenciarlos?</a></div>
</div>
</div>
<div class="cuadroOracion">
<a href="https://www.definiciones-de.com/Definiciones/general_notas.php"><strong>M&#225;s juegos para desafiar tu espa&ntilde;ol</strong></a>
</div></p>
</div>
<br />
<div id="cabeceraComent">
<div id="cabeceraComentComentarios">Preguntas y comentarios</div><div id="cabeceraComentEscribir"><a href="javascript:" onclick="if (!window.__cfRLUnblockHandlers) return false; div_show()" rel="nofollow" data-cf-modified-c0cd6f957549d206bf81043a-="">Escribir comentario o duda</a></div></div>
<div id="comentario"><ul><p><div id="todavia">No hay ning&uacute;n comentario todav&iacute;a </div></p></ul></div></div>
</div content>
<div id="contentbot"></div>
</div wrapper>
<div id="wrapper">
<div id="contentfooter">Todos los derechos reservados © 1998 - 2021 - Diccionario de ALEGSA - Santa Fe, Argentina. <a href="http://www.definiciones-de.com/Definiciones/general_politicas.php">Pol&iacute;ticas y privacidad</a> - <a href="https://www.definiciones-de.com/Definiciones/general_sitios_amigos.php">Amigos</a></div>
<div id="contactofooter"></div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98740-3" type="c0cd6f957549d206bf81043a-text/javascript"></script>
<script type="c0cd6f957549d206bf81043a-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-98740-3');
</script><style type="text/css" media="all">@import "//www.definiciones-de.com/scripts/rateit.css";</style>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c0cd6f957549d206bf81043a-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69bee5f70e5011b3","version":"2021.9.0","r":1,"token":"891e29e2bca244ec86ea121c362d235f","si":100}'></script>
</body>
</html>