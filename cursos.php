<!--Droplist conectado ao banco de dados-->
<?php
         include('phpconect.php');
         $cursos = "SELECT `cursos` FROM `cadastrocursos` ";
         $resultado1 = mysqli_query($con, $cursos) ;  
		?>		
		<select name="Curso" class="form-control form-control-lg" id="Curso">
			<option value="0"> ----- </option>
            <?php while($row1 = mysqli_fetch_array($resultado1)):;?>
            
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

                </select> 