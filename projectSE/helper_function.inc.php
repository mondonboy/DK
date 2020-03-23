<?
function createTable(array $head,array $data){
    echo "<table class='w3-table w3-striped w3-white'>";
    echo "<tr>";
    foreach ($head as $h){
        echo "<th>$h</th>";
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