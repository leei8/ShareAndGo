<?php
if(isset ($_SESSION['loggedin'])){
?>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" id="tabla_trayectos_creados">
        <tr>
            <th>Coche</th>
            <th>Municipios</th>
            <th>Fecha trayecto</th>
            <th>Plazas disponibles</th>
            <th>Ocasional/Frecuente</th>
        </tr>
        
        
    </table>
</div>
<?php

} else {
    header('Location: ../../login/login.php');
} 
?>