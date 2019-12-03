<?php
         include('phpconect.php');
         $salas = "SELECT `Sala`,`Lab` FROM `cadastrosalas` inner join `cadastrolabs` WHERE `status_sala`='Livre' and `status_lab`='Livre'";
         $resultado = mysqli_query($con, $salas) ;  
		?>		
		<select name="Sala" class="form-control form-control-lg" id="Sala">
			<option value="0"> ----- </option>
            <?php while($row1 = mysqli_fetch_array($resultado)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?><option/>

            <?php endwhile;?>

                </select> 