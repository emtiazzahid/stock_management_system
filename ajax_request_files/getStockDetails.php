<?php
include('../init.php');
if(isset($_POST["stock_id"])) {
    $stock_id = $_POST["stock_id"];
    $output = '';
    $query = "SELECT * FROM stock_details WHERE stock_id = '$stock_id'";
    $stock_details= $db->query($query);
    $a = array();
    foreach($stock_details as $cd){
    $a[] = $cd;
        }
}
?>
<input type="hidden" id="hidden_company_price" name="hidden_company_price" value="<?php echo $a[0]['company_price']; ?>">
<input type="hidden" id="hidden_selling_price" name="hidden_selling_price" value="<?php echo $a[0]['selling_price']; ?>">
<input type="hidden" id="hidden_stock_quantity" name="hidden_stock_quantity" value="<?php echo $a[0]['stock_quantity']; ?>">