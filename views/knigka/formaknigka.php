<?php include (ROOT.'/views/layouts/header.php'); ?>

 <div class="container">
  
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Добавление записи в т/книжку</h4>
      <form class="needs-validation" action='/knigka/set/<?php echo $id; ?>' method='post' novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Серия и номер</label>
            <input type="text" class="form-control" id="firstName" name='ser_nom' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
			  <?php foreach ($rabotniki as $row):?>
              <option value = "<?php echo $row['id']; ?>"><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></option>
			  <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>-->
		  
		  <div class="col-md-6 mb-3">
            <label for="firstName">Дата</label>
            <input type="text" class="form-control" id="firstName" name='date' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		    <div class="col-md-6 mb-3">
            <label for="firstName">Сведения о приеме (переводе, увольнении)</label>
            <input type="text" class="form-control" id="firstName" name='svedenia' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
	
		  
		  
		   <div class="col-md-6 mb-3">
            <label for="firstName">Основание</label>
            <input type="text" class="form-control" id="firstName" name='osnovanie' placeholder="" value="" required>
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
<h5>Сведения о трудовой деятельности: <?php echo $rabotniki['familia'].' '.$rabotniki['imya'].' '.$rabotniki['otchestvo'].', '.$rabotniki['datar'].' г. р.' ;?></h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
           <tr>
              <th>ФИО</th>
              <th>Должность</th>
			  <th>Дата</th>
			  <th>Сведения</th>
			  <th>Основание</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($knigka as $row):?>
			<tr>
			<td ><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></td>
			<td ><?php echo $row['dolgnost'];?></td>
			<td ><?php echo $row['date'];?></td>
			<td ><?php echo $row['svedenia'];?></td>
			<td ><?php echo $row['osnovanie'];?></td>
			</tr>
			<?php endforeach; ?>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>