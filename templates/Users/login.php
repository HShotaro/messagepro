<div>
<?= $this->Html->link(_('NewUser'), ['action' => 'add']) ?>
</div>
<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create() ?>
<fieldset>
    <legend><?= _('Log in') ?></legend>
    <?php 
        echo $this->Form->control('username');
        echo $this->Form->control('password');
    ?>
</fieldset>
<?= $this->Form->button(_('Submit')) ?>
<?= $this->Form->end() ?>
</div>