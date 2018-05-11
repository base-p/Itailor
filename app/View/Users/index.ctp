<div>
    <div class="col s12 text-center">
            <span class="flow-text">
                <div class="col s12 text-center"><span class="flow-text"><h1 class="center-align">SHOP ACCOUNT</h1></span></div>
                <h5 class="center-align">Click on login if you have account or Register to create account with E-Tailor </h5>
            </span>
    </div>
</div>


<div class="row">
     <div class="col s12">
    <div class="row">
    <div class="col s12 l6">
          <div class="card-panel">
            <p>I AM A RETURNING CUSTOMER</p>
               <div class="row">
                <?php echo $this->Form->create('User', array('url'=>['controller'=>'users','action'=>'login'],'class' => 'col s12','id' => '')); ?>
                
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email-login" type="email" class="validate" name="email_login">
                      <label for="email-login">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password-login" type="password" class="validate" name="password_login">
                      <label for="password-login">Password</label>
                    </div>
                  </div>
            </div>
              <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit">LOGIN
                      <i class="material-icons right">send</i>
                    </button>
                </div>
              </div> 
        <?php echo $this->form->end(); ?>
          </div>
    </div>
    <div class="col s12 l6">
          <div class="card-panel">
            <p>CREATE NEW ACCOUNT</p>
               <div class="row">
                <?php echo $this->Form->create('User', array('url'=>['controller'=>'users','action'=>'register'],'class' => 'col s12','id' => '')); ?>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email-register" type="email" class="validate" name="email_register">
                      <label for="email-register">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="password-register" type="password" class="validate" name="password_register">
                      <label for="password-register">Password</label>
                    </div>
                      <div class="input-field col s6">
                      <input id="password-register-c" type="password" class="validate" name="password_register_c">
                      <label for="password-register-c">Confirm Password</label>
                    </div>
                  </div>
                
              </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit">REGISTER
                      <i class="material-icons right">send</i>
                    </button>
                </div>
              </div> 
              <?php echo $this->form->end(); ?>
    </div>
    </div>
    </div>
</div>









