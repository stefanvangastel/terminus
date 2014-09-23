<h2 class="sub-header"><?= __('Images'); ?></h2>
<div class="table-responsive">
  <table class="table table-striped">
    <?= $this->Html->tableHeaders(array(__('Repository'), __('Tag'), __('Id'))); ?>
    <tbody>
      <?php
      foreach($images as $image){
        echo $this->Html->tableCells( [ $image ] );
      }
      ?>
    </tbody>
  </table>
</div>