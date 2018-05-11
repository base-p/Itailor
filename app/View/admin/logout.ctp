









         

         <?php echo $this->Form->create($products,['type'=>'file','class'=>'form']); ?>
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
         
   

