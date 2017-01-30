<?php
include('../init.php');

if(isset($_POST["stock_id_string4"])) {
    $string4 = $_POST["stock_id_string4"];
    $output4 = '';
    $query4 = "SELECT stock_id FROM stock_details WHERE stock_quantity >= 1 AND stock_id LIKE '%$string4%'";
    $stock_products_id4 = $db->query($query4);
    $output4 = '<ul class="list-group" id="stock_products_ul4">';
    foreach ($stock_products_id4 as $ids4) {
        $output4 .= '<li class="list-group-item">' . $ids4['stock_id'] . '</li>';
    }
    $output4 .= '</ul>';
    echo $output4;
}
?>