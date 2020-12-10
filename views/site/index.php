<?php include (ROOT.'/views/layouts/header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm">
      *
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

	<div class="card-group">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Сведения о штатной численности работников</h5>
      <p class="card-text">Всего должностей - <?php echo $dolgnosti;?>.</p>
      <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
    </div>
  </div>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title">Сведения о численности работников</h5>
      <p class="card-text">Всего работников - <?php echo $count;?></p>
      <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Сведения о вакантных должностях</h5>
      <p class="card-text">Вакантных должностей - <?php echo $dolgnosti-$count;?></p>
      <p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
    </div>
  </div>
</div>

</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>

