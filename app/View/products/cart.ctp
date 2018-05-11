<?php
if(isset($_POST['addit'])) 
{
    if(isset($_SESSSION['shopping_cart']))
    {
        $content_array = array_column($_SESSION['shopping_cart'], 'contents_id');
        if(!in_array($_GET['id'], $content_array_id)) 
        {
             $count = count($_SESSION['shopping_cart']);
             $content_array = array(
                'contents_name'              => $_POST['name'],
                'contents_id'                => $_GET['id'],
                'contents_quantity'          => $_GET['quantity'],
                'contents_price'             => $_GET['price']
             );
             $_SESSION['shopping_cart'][$count]   = $content_array;
        }
        else
        {
           echo '<script>alert("Item Already Added")</script>';
           echo '<script>window.location="index.php</script>';
        }
    }
    else
    {
        $content_array = array(
            'contents_name'              => $_POST['name'],
            'contents_id'                => $_GET['id'],
            'contents_quantity'          => $_GET['quantity'],
            'contents_price'             => $_GET['price']
        );
        $_SESSION['shopping_cart'][0]   = $content_array;
    }
    
}

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "delete")
    {
        
    }
}

?>












<h1>Cart</h1>

<?= $this->Html->link('Home', ['action' => 'index']) ?>

<table>
    <tr>
        <th>Name of Item</th>
        <th>Item ID</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Sub-total</th>
        <th>Action</th>
    </tr>

<!-- Here is where we iterate through our $articles query object, printing out
    article info -->

<?php
   if(!empty ($_SESSION["shopping_cart"])) 
   {
       $total = 0;
       foreach ($_SESSION["shopping_cart"] as $keys => $values)
       {
   ?>    
        <tr>
            <td><?php echo $values["contents_name"]; ?></td>
            <td><?php echo $values["contents_quantity"]; ?></td>
            <td>$<?php echo $values["contents_price"]; ?></td>
            <td><?php echo number_format($values["contents_quantity"] * $values["contents_price"], 2); ?></td>
            <td><a href="index.php?action=delete&id=<?php echo $values["contents_id"]; ?>"><span class="text-danger">Remove</span> </a></td>
        </tr>
    <?php>
             $total = $total + ($values["contents_quantity"] * $values["contents_price"]); 
       }
       ?>
   
       <tr>
           <td colspan="3" align="right">Total</td>
           <td align="right">$ <?php echo number_format($total, 2); ?></td>
           <td></td>
      </tr>
    <?php
   }
}
?>
</table>




       
        
       
        
        
           
      
       
 
      















