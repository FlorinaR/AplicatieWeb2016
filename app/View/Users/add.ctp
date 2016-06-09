<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Adauga utilizator'); ?></legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('parola');
        echo $this->Form->input('rol', array(
            'options' => array('admin' => 'Administrator', 'manager' => 'Manager')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Trimite')); ?>
</div>
