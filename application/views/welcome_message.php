<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/JS/mesFonctions.js"></script>
	<script src="assets/JQuery/jquery-3.1.1.js"></script>
	<script>
		$
		(
			function()
			{
				$("#creeConference").click(function()
				{
					CreationConference();
				});
				$('#voterConference').click(function()
				{
					VoterConference();
				});
			}
		)
	</script>
</head>
<body>
	<h1>Devoir TechDays</h1><br>
	<input type="button" id="creeConference" value="Créer une conférence"><br>
	<input type="button" id="voterConference" value="Voter pour une conférence"><br>
	<div id="creationConference"></div>
	<div id="listeConference"></div>
</body>
</html>