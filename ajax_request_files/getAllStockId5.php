<?php
include('../init.php');


if(isset($_POST["stock_id_string5"])) {
    $string5 = $_POST["stock_id_string5"];
    $output5 = '';
    $query5 = "SELECT stock_id FROM stock_details WHERE stock_quantity >= 1 AND stock_id LIKE '%$string5%'";
    $stock_products_id5 = $db->query($query5);
    $output5 = '<ul class="list-group" id="stock_products_ul5">';
    foreach ($stock_products_id5 as $ids5) {
        $output5 .= '<li class="list-group-item">' . $ids5['stock_id'] . '</li>';
    }
    $output5 .= '</ul>';
    echo $output5;
}
?>