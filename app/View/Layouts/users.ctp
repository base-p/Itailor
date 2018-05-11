<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
  <html>
    <head>
        <!--Let browser know website is optimized for mobile-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
       
        <title>E-tailor</title>
      
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
     <!--Import materialize.css-->
     <?php echo $this->Html->css("materialize.min.css"); ?> 
     <?php echo $this->Html->css("materialize.css"); ?>
     
    </head>

    <body class="container">
    
    <!--Grid-->
    <div class="grid">
        <div class="row">
            <!--header-->
            <div class="col s12"><?php echo $this->element('header'); ?></div>    
        </div> 
       
        <div class="row text-center"> 
            <div class="col s12">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        
        <div class="row">
            <!--footer-->
            <div class="col s12"><?php echo $this->element('footer'); ?></div>   
        </div> 
    </div>
        
    <!-- javascript references -->
      <?php echo $this->Html->script("jquery-3.2.1.min.js"); ?>
      <?php echo $this->Html->script("materialize.min.js"); ?> 
        
        <script>
            $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.dropdown-button').dropdown();
            $('select').formSelect();  
            });
        </script>
    </body>
  </html>
        

  









  