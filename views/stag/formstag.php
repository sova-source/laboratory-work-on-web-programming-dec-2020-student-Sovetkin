<?php include (ROOT.'/views/layouts/header.php'); ?>
 <div class="container">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Добавление периода в трудовой стаж</h4>
      <form class="needs-validation" action='/stag/set/<?php echo $id; ?>' method='post' novalidate>
        <div class="row">

				  <?php foreach ($rabotniki as $row):?>
						<?php echo $row['id']; ?>"><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?>
				  <?php endforeach; ?>

		   <div class="col-md-6 mb-3">
            <label for="firstName">С какой даты</label>
            <input type="text" class="form-control" id="firstName" name='date_s' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		  <div class="col-md-6 mb-3">
            <label for="firstName">По какую дату</label>
            <input type="text" class="form-control" id="firstName" name='date_po' placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
		  
		    <div class="col-md-6 mb-3">
            <label for="firstName">Коэффиц.</label>
            <input type="text" class="form-control" id="firstName" name='koef' placeholder="" value="" required>
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
<h5>Сведения о трудовом стаже: <?php echo $rabotniki['familia'].' '.$rabotniki['imya'].' '.$rabotniki['otchestvo'].', '.$rabotniki['datar'].' г. р.' ;?></h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ФИО</th>
			  <th>С</th>
			  <th>По</th>
			  <th>Коэф.</th>
			  <th>Итог</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($stag as $row):?>
			<tr>
			<td ><?php echo $row['familia'].' '.$row['imya'].' '.$row['otchestvo'];?></td>
			<td ><?php echo $row['date_s'];?></td>
			<td ><?php echo $row['date_po'];?></td>
			<td ><?php echo $row['koef'];?></td>
			<td ><?php echo $row['itog'];?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ></td>
			<td ><strong><?php echo 'Итого: '.$total_stag; ?></strong></td>
			<tr>
          </tbody>
        </table>
</div>
    </div>
</div>

<?php include (ROOT.'/views/layouts/footer.php'); ?>