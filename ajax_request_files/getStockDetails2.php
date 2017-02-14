<?php
include('../init.php');
if(isset($_POST["stock_id2"])) {
    $stock_id2 = $_POST["stock_id2"];
    $output2 = '';
    $query2 = "SELECT * FROM stock_details WHERE stock_id = '$stock_id2'";
    $stock_details2= $db->query($query2);
    $a2 = array();
    foreach($stock_details2 as $cd2){
    $a2[] = $cd2;
        }
}
?>
<input type="hidden" id="hidden_company_price2" name="hidden_company_price2" value="<?php echo $a2[0]['company_price']; ?>">
<input type="hidden" id="hidden_selling_price2" name="hidden_selling_price2" value="<?php echo $a2[0]['selling_price']; ?>">
<input type="hidden" id="hidden_stock_quantity2" name="hidden_stock_quantity2" value="<?php echo $a2[0]['stock_quantity']; ?>">