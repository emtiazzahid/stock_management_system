<?php
include('../init.php');

if(isset($_POST["stock_id_string3"])) {
    $string3 = $_POST["stock_id_string3"];
    $output3 = '';
    $query3 = "SELECT stock_id FROM stock_details WHERE stock_quantity >= 1 AND stock_id LIKE '%$string3%'";
    $stock_products_id3 = $db->query($query3);
    $output3 = '<ul class="list-group" id="stock_products_ul3">';
    foreach ($stock_products_id3 as $ids3) {
        $output3 .= '<li class="list-group-item">' . $ids3['stock_id'] . '</li>';
    }
    $output3 .= '</ul>';
    echo $output3;
}
?>