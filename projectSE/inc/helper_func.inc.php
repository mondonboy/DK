<?php

function calculateTotalPrice(array $productPrice, array $productNumber, array &$subTotal, float &$priceNoVat, float &$priceWithVat, float $percentVat = 7) {
    $priceNoVat = 0;
    for($i = 0; $i < count($productPrice); $i++)
    {
        $subTotal[$i] = $productPrice[$i] * $productNumber[$i];

        $priceNoVat += + $subTotal[$i];

    }
    $priceWithVat = $priceNoVat*(1+$percentVat/100);

}

function showTable(array $header, array $data, float $totalNoVat = null, float $totalWithVat = null){
    echo "<table class=\"table table-striped\" width=\"60%\" style=\"text-align: center; margin:auto\">";
    echo "<thead style='background-color: #538BAD; color: aliceblue'>";
    echo "<tr>";
    foreach ($header as $h){
        echo "<th>$h</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    if($totalNoVat == null && $totalWithVat == null){
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $col){
                echo "<td style='border-bottom: 1px solid darkgrey'>$col</td>";
            }
            echo "</tr>";
        }
    }else{
        $i=0; $j=0;
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $col){
                echo "<td style='border-bottom: 1px solid darkgrey'>$col</td>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td  colspan='3' align='center'>ราคารวมทั้งหมด (excl. VAT)</td>";
        echo "<td  colspan='2' align='center'>$totalNoVat</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td  colspan='3' align='center'>ราคา VAT 7%</td>";
        echo "<td  colspan='2' align='center'>".($totalWithVat-$totalNoVat)."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='3' align='center'>ราคารวมทั้งหมด (incl. VAT)</td>";
        echo "<td colspan='3' align='center'>$totalWithVat</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

