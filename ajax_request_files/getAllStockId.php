<?php
include('../init.php');
if(isset($_POST["stock_id_string"])) {
    $string = $_POST["stock_id_string"];
    $output = '';
    $query = "SELECT stock_id FROM stock_details WHERE stock_quantity >= 1 AND stock_id LIKE '%$string%'";
    $stock_products_id = $db->query($query);
    $output = '<ul class="list-group" id="stock_products_ul">';
    foreach ($stock_products_id as $ids) {
        $output .= '<li class="list-group-item">' . $ids['stock_id'] . '</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>