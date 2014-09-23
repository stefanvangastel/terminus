<h2 class="sub-header"><?= __('Containers'); ?></h2>
<div class="table-responsive">
  <table class="table table-striped">
    <?= $this->Html->tableHeaders(array(__('Id'), __('Image'), __('Command'), __('Created'), __('Status'), __('Ports'), __('Names'))); ?>
    <tbody>
      <?php
      foreach($containers as $container){
        echo $this->Html->tableCells( [ $container ] );
      }
      ?>
    </tbody>
  </table>
</div>