<!DOCTYPE html> 
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html"; charset="ISO-8859-1"> 
  <title>Geoweb - DemoMap</title> 
</head> 
<body> 

<h2>Feedback - Output</h2> 

<?php 

// Datenbank öffnen, Tabellenfunktion (einmalig) einbinden 
include_once 'geoweb_db_open.php'; 
include_once 'geoweb_db_table_function.php'; 

// Abfrage festlegen (Bundesländer) 
$Sql = 'SELECT * FROM feedback'; 

// Abfrage durchführen 
$result = $db->query($Sql) or  
          die ('Fehler bei Abfrage: '.$db->lastErrorMsg()); 

// Abfrageergebnis als Tabelle ausgeben 
@geoweb_db_table($result); 

// Datenbank schließen 
include 'geoweb_db_close.php'; 

?>  
</body></html>