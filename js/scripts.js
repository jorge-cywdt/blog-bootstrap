function home() {
	$('#contactame').removeClass('active');
	$('#home').addClass('active');
	$('#home').blur();
	$('#wea').html('Software Engineer Student <b>Javascript</b>, <b>Php</b>, <b>Java</b> Heavy Metal music lover Classical music lover Cars lover. <br>Un placer que veas esta página, <b>podrás ver mis proyectos</b>.');
}

function contactame() {		
	$('#home').removeClass('active');
	$('#contactame').addClass('active');
	$('#contactame').blur();
	$('#wea').html('Me da pereza crear un correo institucional, así que pueden envíar lo que quieran decirme a: <br>Email: <b>jorge.cywdt@gmail.com</b> <br>Teléfono: <b>+51 910804220</b> <br><b><a target="_blank" href="files/Curriculum Vitae (Jorge Ernesto).pdf">Curriculum Vitae</a></b>');
}

// function contacto() {
//     $(location).attr('href', 'cover.php?action=contactame');    
// }