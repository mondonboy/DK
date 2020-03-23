<?php
function createTable(array $header,array $data){
    echo "<table class='w3-table w3-striped w3-white'>";
    echo "<tr>";
    foreach ($header as $h){
        echo "<th class='w3-green'>$h</th>";
    }
    echo "</tr>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $col){
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>