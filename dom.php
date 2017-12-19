<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Seleccionando el Dom</title>
	<style type="text/css">
		.mi_clase{
			background: red;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div id="mi_id" ></div>

</body>
<script type="text/javascript">
	var div = document.getElementById("mi_id");
	/* para agregar una clase tomado del id */
	div.classList.add("mi_clase"); 
</script>
</html>