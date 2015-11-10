<?php 

// Oeffnen einer SQLite3-Datenbank (geoweb) 

// Festlegung des Filenamens (Pfades) der Datenbank  
// (kein User/Passwort bei SQLite erforderlich)  
$dbname = '/scratch/users/geoweb2015/htdocs/g05/phpliteadmin/ifip_db.sqlite'; 

// Datenbank oeffnen mit new SQLite3(Filename, Flag) 
// Flag:  
// SQLITE3_OPEN_READWRITE (Lese-/Schreibrecht, falls nicht angegeben)  
// SQLITE3_OPEN_READONLY (nur Leserecht) oder  
// SQLITE3_OPEN_CREATE (erstellt Datenbank, falls sie nicht existiert).  

$db = new SQLite3($dbname); 

?>  