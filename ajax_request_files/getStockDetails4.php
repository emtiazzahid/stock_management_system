<?php
include('../init.php');
if(isset($_POST["stock_id4"])) {
    $stock_id4 = $_POST["stock_id4"];
    $output4 = '';
    $query4 = "SELECT * FROM stock_details WHERE stock_id = '$stock_id4'";
    $stock_details4 = $db->query($query4);
    $a4 = array();
    foreach($stock_details4 as $cd4){
    $a4[] = $cd4;
        }
}
?>
<input type="hidden" id="hidden_company_price4" name="hidden_company_price4" value="<?php echo $a4[0]['company_price']; ?>">
<input type="hidden" id="hidden_selling_price4" name="hidden_selling_price4" value="<?php echo $a4[0]['selling_price']; ?>">
<input type="hidden" id="hidden_stock_quantity4" name="hidden_stock_quantity4" value="<?php echo $a4[0]['stock_quantity']; ?>">