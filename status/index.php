<?php
$uptime = shell_exec('uptime');
$memory = shell_exec('free -h');
$disk = shell_exec('df -h');
$load = sys_getloadavg();

echo "<html><body>";
echo "<h1>Estado del Servidor</h1>";
echo "<h2>Uptime</h2><pre>$uptime</pre>";
echo "<h2>Memoria</h2><pre>$memory</pre>";
echo "<h2>Uso de Disco</h2><pre>$disk</pre>";
echo "<h2>Carga del Sistema</h2><pre>Últimos 1, 5, 15 minutos: " . 
     $load[0] . ", " . $load[1] . ", " . $load[2] . "</pre>";
echo "</body></html>";
?>
