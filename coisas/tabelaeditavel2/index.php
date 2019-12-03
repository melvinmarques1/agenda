<?php 
include('inc/header.php');
?>
<title>Tabela editavel</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/data.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>Tabela editavel</h2>	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addEmployee" class="btn btn-success btn-xs">Add Reserva</button>
				</div>
			</div>
		</div>
		<table id="employeeList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Professor</th>
					<th>Sala</th>					
					<th>Disciplina</th>
					<th>Curso</th>
					<th>Dia</th>	
					<th>Obs</th>				
					<th></th>
					<th></th>					
				</tr>
			</thead>
		</table>
	</div>
	<div id="employeeModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="employeeForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group">
							<label for="name" class="control-label">Professor</label>
							<input type="text" class="form-control" id="empProfessor" name="empName" placeholder="Professor" required>			
						</div>
						<div class="form-group">
							<label for="age" class="control-label">Sala</label>							
							<input type="number" class="form-control" id="empSala" name="empAge" placeholder="Sala">							
						</div>	   	
						<div class="form-group">
							<label for="lastname" class="control-label">Disciplina</label>							
							<input type="text" class="form-control"  id="empDisciplina" name="empSkills" placeholder="Disciplina" required>							
						</div>	 
						<div class="form-group">
							<label for="lastname" class="control-label">Curso</label>							
							<input type="text" class="form-control" id="Curso" name="designation" placeholder="Curso">			
						</div>	
						<div class="form-group">
							<label for="lastname" class="control-label">Dia</label>							
							<input type="text" class="form-control" id="Dia" name="designation" placeholder="Dia">			
						</div>	
						<div class="form-group">
							<label for="address" class="control-label">Obs</label>							
							<textarea class="form-control" rows="5" id="Obs" name="Obs"></textarea>							
						</div>					
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="empId" id="empId" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('inc/footer.php');?>