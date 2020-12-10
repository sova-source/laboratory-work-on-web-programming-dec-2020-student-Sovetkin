<?php include (ROOT.'/views/layouts/header.php'); ?>

 <div class="container">
  
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      
    </div>

			  <?php foreach ($rabotniki as $row):?>
              <option value = "<?php echo $row['id']; ?>"><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></option>
			  <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
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
		  
		  
<div class="container">
    <div class="row">
        <div class="col-sm-12">
<h5>Сведения о трудовой деятельности</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
           <tr>
              <th>ФИО</th>
              <th>Должность</th>
			  <th>Добавить</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rabotniki as $row):?>
			<tr>
			<td ><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></td>
			<td ><?php echo $row['dolgnost'];?></td>
			<td ><a href = "/knigka/show/<?php echo $row['id'];?>">Добавить</a></td>
			</tr>
			<?php endforeach; ?>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>