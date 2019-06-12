<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br>
<?= $this->element('navigation') ?>
<br><br>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('mxid', array('class' => 'form-control')); ;
        ?><br>
        <?php
            echo $this->Form->control('name', array('class' => 'form-control')); ;
        ?><br>
        <?php
            echo $this->Form->control('email', array('class' => 'form-control')); ;
        ?><br>
        <?php
            echo $this->Form->control('password', array('class' => 'form-control')); ;
        ?><br>
        <?php
            echo $this->Form->control('phone', array('class' => 'form-control')); ;
        ?>
    </fieldset>
    <br>
    <?= $this->Form->submit('Submit', array('class' => 'btn btn-primary btn-lg')); ?>
    <?= $this->Form->end() ?>
</div>
