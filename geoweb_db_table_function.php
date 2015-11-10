<?php 
// Funktion: Abfrageergebnis in Html-Tabelle ausgeben

Function geoweb_db_table($result)
{
  echo "<table border='1'><tr>";

  // Tabellen-Header (Feldnamen)
  for ($i=0; $i<$result->numColumns(); $i++)
    { echo '<th  bgcolor="#CCFFFF">' . $result->ColumnName($i) . '</th>'; } 
  echo "</tr>\n";

  // Alle Zeilen ausgeben
  while ($zeile = $result->fetchArray(SQLITE3_NUM)) 
    {echo "<tr>";
     // Alle Spaltenwerte je Zeile ausgeben
     foreach ($zeile as $fld_val) 
       { echo "<td>$fld_val</td>"; }
     echo "</tr>\n";
    }
  echo "</table>";
}
?> 