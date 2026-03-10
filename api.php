<?php
header('Content-Type: application/json');

// Mengambil CPU Load (Khusus Linux)
$load = sys_getloadavg();
$cpu_usage = round($load[0] * 100 / shell_exec('nproc'), 2);

// Mengambil RAM Usage
$free = shell_exec('free');
$free = (string)trim($free);
$free_arr = explode("\n", $free);
$mem = explode(" ", $free_arr[1]);
$mem = array_filter($mem);
$mem = array_merge($mem);
$memory_usage = round($mem[2] / $mem[1] * 100, 2);

echo json_encode([
    'cpu' => $cpu_usage,
    'ram' => $memory_usage
]);
