<?php
if(isset ($_SESSION['loggedin'])){
?>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" id="tabla_peticiones_trayecto">
        <tr>
            <th>Fecha</th>
            <th>Remitente</th>
            <th>Matricula</th>
            <th>Municipios</th>
            <th>Dias</th>
            <th>Estado</th>
            <th>Respuesta</th>
        </tr>
        
    </table>
</div>
<?php

} else {
    header('Location: ../../login/login.php');
} 
?>