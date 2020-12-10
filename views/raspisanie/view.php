<?php include (ROOT.'/views/layouts/header.php'); ?>
 <div class="container">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Добавление должностей</h4>
      <form class="needs-validation" action='/raspisanie/set' method='post' novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Код подразделения</label>
            <input type="text" class="form-control" id="firstName" name='code' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Должность</label>
            <input type="text" class="form-control" id="firstName" name='dolgnost' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		  <div class="col-md-6 mb-3">
            <label for="firstName">Тариф</label>
            <input type="text" class="form-control" id="firstName" name='tarif' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		    <div class="col-md-6 mb-3">
            <label for="firstName">Примечания</label>
            <input type="text" class="form-control" id="firstName" name='prim' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
    </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
<h2>Штатное расписание</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Код подразделения</th>
              <th>Должность</th>
              <th>Тариф</th>
              <th>Примечание</th>
			  <th>Исключить</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($raspisanie as $row):?>
			<tr>
			<td ><?php echo $row['code'];?></td>
			<td ><?php echo $row['dolgnost'];?></td>
			<td ><?php echo $row['tarif'];?></td>
			<td ><?php echo $row['prim'];?></td>
			<td><a href = "/raspisanie/hide/<?php echo $row['id']; ?>">Исключить</a></td>
			</tr>
			<?php endforeach; ?>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>