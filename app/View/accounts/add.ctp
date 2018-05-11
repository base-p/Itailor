<!-- File: src/Template/Klaxx/add.ctp -->
 <style>
     * {
    margin: 0 auto;
    padding: 0px;
}
body {
    display: block;
    
    font-size: 100%;
    background: #F8F8FF;
}

.createaccount {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    padding: 20px;
    border-bottom: none;
    border: 1px solid #B0C4DE;
    border-radius: 10px 10px 0px 0px;
    
}
form {
    width: 30%;
    height: auto;
    margin: 0px auto;
    padding: 20px;
    border: 2px solid black;
    background: white;
    border-radius: 0px 0px 10px 10px;
    line-height: 350px;
}
.input-group {
    margin: 5px 0px 5px 0px; 
}

.input-group label {
    display: block;
    text-align: left;
    margin: 1px; 
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
    margin:0;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
</style>
         

         <?php echo $this->Form->create($contents,['type'=>'file','class'=>'form']); ?>
         <h2 class="header">Post Images and Details</h2>
         
         <div class="input-group">
             <?php echo $this->Form->control('name',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('price',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('description',['class'=> 'input-group input','rows' => '3']);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('photo',['type'=>'file', 'class'=> "btn"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('size1',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('size2',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('size3',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('size4',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->control('size5',['class'=> "input-group input"]);?>
         </div>
         <div class="input-group">
             <?php echo $this->Form->button('Save Post', ['class'=> "btn"]);?>
         </div>

         <?php echo $this->Form->end();?>
         
   

