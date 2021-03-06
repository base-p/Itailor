<!-- Navigation -->
<div class="col s12">
    <br><br>
    <nav>
        <div class="nav-wrapper red">
          
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-moblie" class="left hide-on-med-and-down">
            <li><?php echo $this->Html->link('HOME','/Products/index');?></li> 
            <!-- Dropdown Trigger -->
            <li><?php echo $this->Html->link('SHOP','#',['class'=>'dropdown-button','data-target'=>'dropdown1','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('MY ACCOUNT','#',['class'=>'dropdown-button','data-target'=>'dropdown2','data-beloworigin'=>'true']);?></li>
            <li><?php echo $this->Html->link('CONTACT','/contents/index');?></li>
            <li><?php echo $this->Html->link('ABOUT US','/contents/index');?></li>  
          </ul>
         
            
            <ul> 
              <li><a href="#!" class="brand-logo right">Logo</a></li>
          </ul>
         
        </div>
        
        
        
    </nav>
</div>


<ul class="sidenav" id="mobile-demo">
    <li><?php echo $this->Html->link('HOME','/Products/index');?></li>
    <li><?php echo $this->Html->link('SHOP','#',['class'=>'dropdown-button','data-target'=>'mobile-demo1','data-coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('MY ACCOUNT','#',['class'=>'dropdown-button','data-target'=>'mobile-demo2','data-coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('CONTACT','/Contents/index');?></li>
    <li><?php echo $this->Html->link('ABOUT US','/Contents/index');?></li>
</ul>



<!-- Shop Dropdown Content -->
<ul id='dropdown1' class='dropdown-content'>
    <li><?php echo $this->Html->link('Plane Shirts','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Designer Shirts','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Ladies Shirts','/Products/index');?></li>
</ul>

<ul id='mobile-demo1' class='dropdown-content'>
    <li><?php echo $this->Html->link('Plane Shirts','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Designer Shirts','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Ladies Shirts','/Products/index');?></li>
</ul>

<!-- My Account Dropdown Content -->
<ul id='dropdown2' class='dropdown-content'>
    <li><?php echo $this->Html->link('My Orders','/Users/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Update Address','/Users/editaddress');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/Users/login');?></li>
</ul>

<ul id='mobile-demo2' class='dropdown-content'>
    <li><?php echo $this->Html->link('My Orders','/Users/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Update Address','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/Users/login');?></li>
</ul>




  