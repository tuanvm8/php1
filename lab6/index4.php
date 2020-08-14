<?php session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions

//Define the products and cost
$products = array(" Iphone2", " Iphone8", " Iphone_XSMax");
$amounts = array("100", "120", "150");

//Load up session
 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
  }
 }

 //---------------------------
 //Reset
 if ( isset($_GET['reset']) )
 {
 if ($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]); //The quantity for each product
   unset($_SESSION["amounts"]); //The amount from each product
   unset($_SESSION["total"]); //The total cost
   unset($_SESSION["cart"]); //Which item has been chosen
   }
 }

 //---------------------------
 //Add
 if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }

  //---------------------------
  //Delete
  if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;
   //remove item if quantity is zero
   if ($qty == 0) {
    $_SESSION["amounts"][$i] = 0;
    unset($_SESSION["cart"][$i]);
  }
 else
  {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }
 }
 ?>
 <h2>Danh Sách Sản Phẩm</h2>
 <table>
   <tr>
   <th>Sản Phẩm</th>
   <th width="10px">&nbsp;</th>
    <th>Ảnh Sản Phẩm</th>

   <th>Gía Sản Phẩm</th>
   <th width="10px">&nbsp;</th>
   <th>Đặt Hàng</th>
   </tr>
 <?php
 for ($i=0; $i< count($products); $i++) {
   ?>
   <tr>
   <td style="margin-left: 10px;"><?php echo($products[$i]); ?></td>
   <td width="10px">&nbsp;</td>
   <td> <img src="https://tse4.mm.bing.net/th?id=OIP.gpCi89yvLynx8sH_Hh7_lgHaHa&pid=Api&P=0&w=300&h=300" alt="" width="50"></td> 
   <td><?php echo($amounts[$i]); ?></td>
   <td width="10px">&nbsp;</td>
   <td><a href="?add=<?php echo($i); ?>">Thêm vào Cart</a></td>
   </tr>
   <?php
 }
 ?>
 <tr>
 <td colspan="5"></td>
 </tr>
 <tr>
 <td colspan="5"><a href="?reset=true">Xóa Cart</a></td>
 </tr>
 </table>
 <?php
 if ( isset($_SESSION["cart"]) ) {
 ?>
 <br/><br/><br/>
 <h2>Giỏ Hàng</h2>
 <table>
 <tr>
 <th>Sản Phẩm</th>
 <th width="10px">&nbsp;</th>
 <th>Số lượng</th>
 <th width="10px">&nbsp;</th>
 
 </tr>
 <?php
 $total = 0;
 foreach ( $_SESSION["cart"] as $i ) {
 ?>
 <tr>
 <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>

 <td width="10px">&nbsp;</td>
 
 </tr>
 <?php
 }
 $_SESSION["total"] = $total;
 ?>
 <tr>
 </tr>
 </table>
 <?php
 }
 ?>