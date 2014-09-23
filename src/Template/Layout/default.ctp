<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>
		<?= 'Terminus' ?> | <?= $this->fetch('title') ?>
	</title>
    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>

    <!-- Custom styles for this template -->
    <?= $this->Html->css('dashboard.css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?= $this->Html->script('html5shiv.min.js') ?>
      <?= $this->Html->script('respond.min.js') ?>
    <![endif]-->

    <?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
  </head>

  <body>

    <?= $this->element('nav_top'); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <?= $this->element('nav_sidebar'); ?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	    	  <?= $this->Flash->render() ?>

			    <?= $this->fetch('content') ?>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('docs.min.js') ?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>
  </body>
</html>

