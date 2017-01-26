<?php
include('../init.php');
if(isset($_POST["customer_name_string"])) {
    $string = $_POST["customer_name_string"];
    $output = '';
    $query = "SELECT customer_name FROM customer_details WHERE customer_name LIKE '%$string%'";
    $customer_names = $db->query($query);
    $output = '<ul id="customer_name_ul" class="list-group" >';
    foreach ($customer_names as $names) {
        $output .= '<li class="list-group-item customer_name_li">' . $names['customer_name'] . '</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>