<?php
         include('phpconect.php');
         $dias = "SELECT `dia` FROM `dias` ORDER BY `id_dia`";
         $resultado = mysqli_query($con, $dias) ;  
		?>		
		<select name="Dia" class="form-control form-control-lg" id="Dia">
			<option value="0"> ----- </option>
            <?php while($row1 = mysqli_fetch_array($resultado)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

                </select> 