<?php
include('../init.php');
if(isset($_POST["stock_id5"])) {
    $stock_id5 = $_POST["stock_id5"];
    $output5 = '';
    $query5 = "SELECT * FROM stock_details WHERE stock_id = '$stock_id5'";
    $stock_details5= $db->query($query5);
    $a5 = array();
    foreach($stock_details5 as $cd5){
    $a5[] = $cd5;
        }
}
?>
<input type="hidden" id="hidden_selling_price5" name="hidden_selling_price5" value="<?php echo $a5[0]['selling_price']; ?>">
<input type="hidden" id="hidden_stock_quantity5" name="hidden_stock_quantity5" value="<?php echo $a5[0]['stock_quantity']; ?>">