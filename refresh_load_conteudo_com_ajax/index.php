<html>
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#menu a").click(function( e ){
			e.preventDefault();
			var href = $( this ).attr('href');
			// insere o loading antes de carregar o content
			$('#content').html('<img id="loading" alt="Carregando" title="Carregando" src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_blue_512.gif" />');
			// carrega o content
			$("#content").load( href +" #content");						
		});
		
		// loading
		/*var loading = $(
			'<img id="loading" alt="Carregando" title="Carregando" src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_blue_512.gif" />'
			).appendTo('#content').hide()
			loading.ajaxStart(function(){
				$(this).show();
			});
			loading.ajaxStop(function(){
				$(this).hide();
			});*/
	});
		
	</script>

</head>
<body>
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="fotos.php">Fotos</a></li>		
		<li><a href="contato.php">Contato</a></li>		
	</ul><!-- /menu -->
	
	
	<div id="content">
		<h1>Bem Vindo!</h1>
		<p>Essa eh a home desse nome pseudo-site.</p>
	</div><!-- /content -->
</body>
</html>