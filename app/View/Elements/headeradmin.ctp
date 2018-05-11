<!-- Navigation -->
<div class="navbar-fixeid">
    <br><br>
    <nav>
        <div class="nav-wrapper red">
          <a href="#!" class="brand-logo right">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-moblie" class="left hide-on-med-and-down">
            <li><?php echo $this->Html->link('DASHBOARD','/admin/index');?></li> 
            <!-- Dropdown Trigger -->
            <li><?php echo $this->Html->link('CATEGORIES','#',['class'=>'dropdown-button','data-target'=>'dropdown1','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('PRODUCTS','#',['class'=>'dropdown-button','data-target'=>'dropdown2','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('ORDERS','#',['class'=>'dropdown-button','data-target'=>'dropdown3','coverTrigger'=>'false']);?></li>
           <li><?php echo $this->Html->link('CUSTOMERS','#',['class'=>'dropdown-button','data-target'=>'dropdown4','coverTrigger'=>'false']);?></li>
            <li><?php echo $this->Html->link('MY ACCOUNT','#',['class'=>'dropdown-button','data-target'=>'dropdown5','coverTrigger'=>'false']);?></li>
          </ul>
        </div>
    </nav>
</div>


<ul class="sidenav" id="mobile-demo">
    <li><?php echo $this->Html->link('DASHBOARD','/admin/index');?></li>
    <li><?php echo $this->Html->link('CATEGORIES','#',['class'=>'dropdown-button','data-target'=>'mobile-demo1','coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('PRODUCTS','#',['class'=>'dropdown-button','data-target'=>'mobile-demo2','coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('ORDERS','#',['class'=>'dropdown-button','data-target'=>'mobile-demo3','coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('CUSTOMERS','#',['class'=>'dropdown-button','data-target'=>'mobile-demo4','coverTrigger'=>'false']);?></li>
    <li><?php echo $this->Html->link('MY ACCOUNT','#',['class'=>'dropdown-button','data-target'=>'mobile-demo5','coverTrigger'=>'false']);?></li>
</ul>



<!-- Categories Dropdown Content -->
<ul id='dropdown1' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Categories','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add Categories','/Products/index');?></li>
</ul>

<ul id='mobile-demo1' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Categories','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add Categories','/Products/index');?></li>
</ul>

<!-- Product Dropdown Content -->
<ul id='dropdown2' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Products','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add Products','/products/addproducts');?></li>
</ul>

<ul id='mobile-demo2' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Products','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add Products','/Products/index');?></li>
</ul>

<!-- Orders Dropdown Content -->
<ul id='dropdown3' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Orders','/Accounts/index');?></li>
</ul>

<ul id='mobile-demo3' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Orders','/Accounts/index');?></li>
</ul>

<!-- Customers Dropdown Content -->
<ul id='dropdown4' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Customers','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('View Review','/Products/index');?></li>
</ul>

<ul id='mobile-demo4' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Customers','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('View Review','/Products/index');?></li>
</ul>

<!-- My account Dropdown Content -->
<ul id='dropdown5' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Profile','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add New Account','/Products/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/Products/index');?></li>
</ul>

<ul id='mobile-demo5' class='dropdown-content'>
    <li><?php echo $this->Html->link('View Profile','/Accounts/index');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Add New Account','/admin/adduser');?></li>
    <li class="divider" tabindex="-1"></li>
    <li><?php echo $this->Html->link('Logout','/Products/index');?></li>
</ul>




























