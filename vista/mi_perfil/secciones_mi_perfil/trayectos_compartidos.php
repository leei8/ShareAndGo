<?php
if(isset ($_SESSION['loggedin'])){
?>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" id="tabla_trayectos_compartidos">
        <tr>
            <th>Conductor</th>
            <th>Vehiculo</th>
            <th>Municipios</th>
            <th>Plazas disponibles</th>
            <th>Dias</th>
            <th>Ocasional/Fecuente</th>
            <th>Fecha</th>
        </tr>
        
    </table>
</div>
<?php

} else {
    header('Location: ../../login/login.php');
} 
?>