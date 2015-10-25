$(function(){
	//carga el cuadrito de bienvenida en la primera pantalla
	$("#contenido").load('vista/inc/ppal.php');
	//itera sobre los enlaces de la lista del menu, para cargar los html
	$("li a").each(function(){
		var href = $(this).attr("href");
		$(this).attr({href:"#"});
		$(this).click(function(e){
			e.preventDefault();
			$("#contenido").load(href);
			$("li a").css("backgroundColor","#3388AA");
			$(this).css("backgroundColor","#0A455D");
			
		});

	});

	

	//estos eventos son puramente magia
	var botoni = 0;
	$("#menu-toggle").click(function(e) {
    	e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    botoni++;
    if((botoni%2)!=0)
    	$("#menu-toggle").html(">>");
    if((botoni%2)==0)
    	$("#menu-toggle").html("<<");

});

});