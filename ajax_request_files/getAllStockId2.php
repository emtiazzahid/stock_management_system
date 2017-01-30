<?php
include('../init.php');

if(isset($_POST["stock_id_string2"])) {
    $string2 = $_POST["stock_id_string2"];
    $output2 = '';
    $query2 = "SELECT stock_id FROM stock_details WHERE stock_quantity >= 1 AND stock_id LIKE '%$string2%'";
    $stock_products_id2 = $db->query($query2);
    $output2 = '<ul class="list-group" id="stock_products_ul2">';
    foreach ($stock_products_id2 as $ids2) {
        $output2 .= '<li class="list-group-item">' . $ids2['stock_id'] . '</li>';
    }
    $output2 .= '</ul>';
    echo $output2;
}
?>