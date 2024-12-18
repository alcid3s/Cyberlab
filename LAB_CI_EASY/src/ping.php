<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hostname'])) {
    $hostname = $_POST['hostname'];

    $pingResult = shell_exec("ping -c 4 $hostname");

    if ($pingResult === null) {
        $pingResult = "Error executing ping. Please check your command.";
    }
}
?>
