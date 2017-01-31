<?php
// define arrays and variables
	$fumble1 = array("Artless", "Awkward", "Bumbling", "Butterfingered", "Clumsy", "Crude", "Ill-conceived", "Inept", "Lump-headed", "Maladroit", "Oafish", "Ungainly");

	$fumble2 = array("Blunder", "Botch job", "Cock-Up", "Faux pas", "Floundering", "Fumbling", "Goof", "Incompetence", "Miscalculation", "Mismanagement", "Screw up", "Slopwork");

	$success1 = array();
	
	$success2 = array();
	
//Check for post of form

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Check for number of responses that are desired
	$num_of_resp = $_POST["resp_num"];

	$fumble_word_one = shuffle($fumble1);
	$fumble_word_two = shuffle($fumble2);
  
	$success_word_one = shuffle($success1);
	$success_word_two = shuffle($success2);
}

?>

<body>

<h3>Epic Failure and Success</h3>

<p>Sometime you simply need a more expressive way to describe a character's epic failures or their amazing successes.  This generator
will provide you with some fun ways to describe these extreme rolls and their consequences.</p>

<form>
	<fieldset>
		<!-- Add a field to enter number of responses desired -->
		<input type="number" name="num_of_resp" min = 1 max = 10><br>
	</fieldset>
	
	<!-- button for submit -->
		<input type="submit">
	
</form>

<table>
<tr>
	<th><h5>Epic Fails</h5></th>
	<th><h5>Epic Successes</h5></th>
</tr>
<tr>
<!-- create a row for each entry -->
<?php 
	$i = 0;
	while $i < $num_of_resp {
		
		
	}
?>
<tr>
	<td> 
	
	</td>
</tr>
</tr>

</table>




</body>

//http://www.darthsanddroids.net/episodes/1459.html
