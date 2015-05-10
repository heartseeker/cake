<?php echo $this->Html->script('jquery', FALSE) ?>

<?php echo '<pre>', print_r($errors) , '</pre>' ?>
<h2>Contact Form</h2>

<?php
echo $this->Form->create();
$this->Form->inputDefaults(array(
  'error' => false
));
echo $this->Form->input('name', array('id' => 'name'));
echo $this->Form->input('email', array('id' => 'email'));
echo $this->Form->input('message', array('id' => 'message'));
echo $this->Form->end('Send');
?>