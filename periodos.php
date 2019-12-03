<?php
         include('phpconect.php');
         $periodos = "SELECT `periodo` FROM `periodo` ";
         $resultado = mysqli_query($con, $periodos) ;  
		?>		
		<select name="Periodo" class="form-control form-control-lg" id="Periodo">
			<option value="0"> ----- </option>
            <?php while($row1 = mysqli_fetch_array($resultado)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

                </select> 