
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
            <div class="col s12 text-center"><span class="flow-text"><h1 class="center-align">My Account</h1></span></div>
            
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
        











  