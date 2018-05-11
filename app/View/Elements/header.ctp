<!-- Navigation -->
<div class="navbar-fixeid">
    <br><br>
    <nav>
        <div class="nav-wrapper red">
          <a href="#!" class="brand-logo right">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-moblie" class="left hide-on-med-and-down">
            <li><?php echo $this->Html->link('HOME','/products/index');?></li> 
            <!-- Dropdown Trigger -->
            <li><?php echo $this->Html->link('SHOP','#',['class'=>'dropdown-button','data-target'=>'dropdown1','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('MY ACCOUNT','#',['class'=>'dropdown-button','data-target'=>'dropdown2','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('CONTACT','/contents/index');?></li>
            <li><?php echo $this->Html->link('ABOUT US','/contents/index');?></li>
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
    <li><?php echo $this->Html->link('Plane Shirts','/products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Designer Shirts','/products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Ladies Shirts','/products/index');?></li>
</ul>

<ul id='mobile-demo1' class='dropdown-content'>
    <li><?php echo $this->Html->link('Plane Shirts','/products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Designer Shirts','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Ladies Shirts','/Products/index');?></li>
</ul>

<!-- My Account Dropdown Content -->
<ul id='dropdown2' class='dropdown-content'>
    <li><?php echo $this->Html->link('My Orders','/accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Update Address','/accounts/editaddress');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/accounts/login');?></li>
</ul>

<ul id='mobile-demo2' class='dropdown-content'>
    <li><?php echo $this->Html->link('My Orders','/accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Update Address','/products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/Accounts/login');?></li>
</ul>




  