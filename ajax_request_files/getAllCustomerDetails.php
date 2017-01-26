<?php
include('../init.php');
if(isset($_POST["customer_name"])) {
    $customer_name = $_POST["customer_name"];
    $output = '';
    $query = "SELECT customer_address, customer_contact1 FROM customer_details WHERE customer_name = '$customer_name' LIMIT 1";
    $customer_details= $db->query($query);
//    $customer_details->customer_address;
    $a = array();
    foreach($customer_details as $cd){
    $a[] = $cd;
        }
}
?>
<input type="hidden" id="hidden_address" name="hidden_address" value="<?php echo $a[0]['customer_contact1']; ?>">
<input type="hidden" id="hidden_contact" name="hidden_contact" value="<?php echo $a[0]['customer_address']; ?>">