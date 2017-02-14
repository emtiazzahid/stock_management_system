<?php
include('../init.php');
if(isset($_POST["stock_id3"])) {
    $stock_id3 = $_POST["stock_id3"];
    $output3 = '';
    $query3 = "SELECT * FROM stock_details WHERE stock_id = '$stock_id3'";
    $stock_details3= $db->query($query3);
    $a3 = array();
    foreach($stock_details3 as $cd3){
    $a3[] = $cd3;
        }
}
?>
<input type="hidden" id="hidden_company_price3" name="hidden_company_price3" value="<?php echo $a3[0]['company_price']; ?>">
<input type="hidden" id="hidden_selling_price3" name="hidden_selling_price3" value="<?php echo $a3[0]['selling_price']; ?>">
<input type="hidden" id="hidden_stock_quantity3" name="hidden_stock_quantity3" value="<?php echo $a3[0]['stock_quantity']; ?>">