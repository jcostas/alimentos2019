 <?php ob_start() ?>

      <form name="login" action="index.php?ctl=login" method="POST">

          <table>
              <tr>
                  <td>Iniciar sesión de usuario:</td>
                  <td><input type="text" name="nombre" value="<?php echo $params['nombre']?>"></td>
							</tr>
							<tr>
									<td>Password:</td>
                  <td><input type="text" name="pass" value="<?php echo $params['pass']?>"></td>
							</tr>
							<tr>
                  <td><input type="submit" value="Iniciar sesión"></td>
              </tr>
          

          </table>

      </form>

      <?php if (count($params['resultado'])>0): ?>
      Inicio de sesión con usuario: <?php echo $params['nombre'];?>
      
      <?php else:?>
 		<span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
 			
      <?php endif; ?>
			

      <?php $contenido = ob_get_clean() ?>

      <?php include 'layout.php' ?>
