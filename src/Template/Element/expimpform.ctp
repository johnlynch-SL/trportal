<div>
    <?= $this->Form->create($results, ['class' => 'form-inline', 'url' => ['action' => 'export']]); ?>
        <?= $this->Form->button(__('Export'), ['action' => 'export', 'class' => 'btn btn-info btn-lg']) ?>
    <?= $this->Form->end(); ?>
</div>
<div>
    <?= $this->Form->create($results, ['class' => 'form-inline', 'type' => 'file', 'url' => ['action' => 'import']]); ?>
        <?= '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#uploadModal">Import</button>'; ?>
    <?= $this->Form->end(); ?>
</div>



