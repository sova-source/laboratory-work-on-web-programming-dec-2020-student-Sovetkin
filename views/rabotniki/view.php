<?php include (ROOT.'/views/layouts/header.php'); ?>

 <div class="container">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Добавление работника</h4>
      <form class="needs-validation" action='/rabotniki/set' method='post' novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Фамилия</label>
            <input type="text" class="form-control" id="firstName" name='familia' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Имя</label>
            <input type="text" class="form-control" id="firstName" name='imya' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		  <div class="col-md-6 mb-3">
            <label for="firstName">Отчество</label>
            <input type="text" class="form-control" id="firstName" name='otchestvo' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		    <div class="col-md-6 mb-3">
            <label for="firstName">Дата рождения</label>
            <input type="text" class="form-control" id="firstName" name='datar' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Место рождения</label>
            <input type="text" class="form-control" id="firstName" name='mestor' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Паспортные данные</label>
            <input type="text" class="form-control" id="firstName" name='passport' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Образование</label>
            <input type="text" class="form-control" id="firstName" name='obrazovanie' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Должность</label>
           <select class="custom-select d-block w-100" name="dolgnost" required>
              <option value=""></option>
			  <?php foreach ($raspisanie as $row):?>
              <option value = "<?php echo $row['id']; ?>"><?php echo $row['dolgnost'];?></option>
			  <?php endforeach; ?>
            </select>
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
<h2>Список работников</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ФИО</th>
              <th>Дата рождения</th>
              <th>Место рождения</th>
              <th>Паспортные данные</th>
			  <th>Образование</th>
              <th>Должность</th>
			  <th>Удалить</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rabotniki as $row):?>
			<tr>
			<td ><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></td>
			<td ><?php echo $row['datar'];?></td>
			<td ><?php echo $row['mestor'];?></td>
			<td ><?php echo $row['passport'];?></td>
			<td ><?php echo $row['obrazovanie'];?></td>
			<td ><?php echo $row['dolgnost'];?></td>
			<td ><a href = "/rabotniki/hide/<?php echo $row['id'];?>">Удалить</a></td>
			</tr>
			<?php endforeach; ?>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>