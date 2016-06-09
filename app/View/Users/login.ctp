<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo 'Logare'; ?>
        </legend>
        <?php 
        echo $this->Form->input('email');
        echo $this->Form->input('parola', array('type' => 'password'));
        echo $this->Form->submit('Logare', array('class' => 'button'));
        ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
