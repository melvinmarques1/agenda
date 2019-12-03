<?php
         include('phpconect.php');
         $turmas = "SELECT `turma` FROM `turmas` ";
         $resultado = mysqli_query($con, $turmas) ;  
		?>		
		<select name="Turma" class="form-control form-control-lg" id="Turma">
			<option value="0"> ----- </option>
            <?php while($row1 = mysqli_fetch_array($resultado)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

                </select> 