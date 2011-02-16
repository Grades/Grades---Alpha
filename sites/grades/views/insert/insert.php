<?php
//echo "<b>grades/views/insert/insert.php</b> erfolgreich geladen. <br>";
?>

<form id="insert_form" name="insert" action="#" method="post">
  <h4>Neue Note</h4>
    <input type="text" name="grade_value" value="Note hier eintragen">
    <input type="submit" name="grade_submit" value="Note eintragen">
</form>
<?php
if($_POST['grade_submit']){
  insert_grade($_POST['grade_value']);
  }
  
//Link zu show.php anzeigen
echo "<a href=\"index.php?site=grades&view=show\">Noten anzeigen</a><br>";
  
//Seitentitel spezifizieren  
$site_title="Note eintragen";
//Placeholders
echo "<br><br>";
?>

	<script type="text/javascript" src="plugins/jquery/jquery-1.5.js">
		</script>
	<script type="text/javascript" src="plugins/jquery/jquery.form.js">
		</script>
		
	<script type="text/javascript"> 
		// wait for the DOM to be loaded 
			$(document).ready(function() { 
		// bind 'insert_form' and provide a simple callback function 
			$('#insert_form').ajaxForm(function() { 
			alert("die Note wurde erfolgreich eingetragen!"); 
            }); 
        }); 
        </script> 