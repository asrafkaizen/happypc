<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Computer $computer
 */
?>
<br>
<?= $this->element('navigation') ?>
<br>
<div class="computers form large-9 medium-8 columns content">
    <?= $this->Form->create($computer) ?>
    <fieldset>
        <legend><?= __('Add Computer') ?></legend>
        <?php
            echo $this->Form->control('location_id', array('class' => 'form-control'), ['options' => $locations]); ;
        ?><br>
        <?php
            echo $this->Form->control('model', array('class' => 'form-control')); ;
        ?><br>
        <?php
            echo $this->Form->control('cond', array('class' => 'form-control')); ;
        ?>
    </fieldset>
<br>
    <table>
    <tr>
    <td><?= $this->Form->submit('Submit', array('class' => 'btn btn-outline-info')); ?><td>
    <td style="padding-left: 979px;"><button type="button"  class="btn btn-outline-info" onclick="goBack()">Go Back</button></td>
    </tr>
    </table>
</div>
