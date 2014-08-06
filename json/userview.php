<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>		
		<section id="content"><h1>GET JSON DATA FROM PHP AND MYSQL USING AJAX</h1><hr/> </section>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
			$(document).on("ready", function(){
				loadData();
			});	
			
			var loadData = function(){
				$.ajax({
					type:"POST",
					url:"Users.php"
				}).done(function(data){
					console.log(data);
					var users = JSON.parse(data);
					for(var i in users){
						$("#content").append(users[ i ].usuario + " " + users[ i ].nombres + "<br>");
					}
				});
			}
			
		</script>
	</body>
</html>