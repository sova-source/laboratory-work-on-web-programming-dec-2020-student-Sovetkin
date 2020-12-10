<?php include (ROOT.'/views/layouts/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
<h2></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Фамилия</th>
              <th>Имя</th>
              <th>Отчество</th>
              <th>Дата рожд.</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($searcharray as $row):?>
			<tr>
			<td ><?php echo $row['familia'];?></td>
			<td ><?php echo $row['imya'];?></td>
			<td ><?php echo $row['otchestvo'];?></td>
			<td ><?php echo $row['datar'];?></td>
			</tr>
			<?php endforeach; ?>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>