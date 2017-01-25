<?php
include('../init.php');
if(isset($_POST["query"])) {
    $string = $_POST["query"];
    $output = '';
    $query = "SELECT stock_id FROM stock_entries WHERE quantity >= 1 AND stock_id LIKE '%$string%'";
    $stock_products_id = $db->query($query);
    $output = '<ul class="list-group">';
    foreach ($stock_products_id as $ids) {
        $output .= '<li class="list-group-item">' . $ids['stock_id'] . '</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>