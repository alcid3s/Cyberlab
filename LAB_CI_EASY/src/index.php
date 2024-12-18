<?php
include('ping.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping Command - Network Tool</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <header>
        <h1>Ping Command - Network Tool</h1>
        <p>Enter a hostname or IP address below to test connectivity.</p>
    </header>

    <div class="form-container">
        <form method="POST">
            <label for="hostname">Hostname or IP Address:</label>
            <input type="text" id="hostname" name="hostname" placeholder="e.g., google.com" required>
            <input type="submit" value="Ping">
        </form>
    </div>

    <?php if (isset($pingResult)): ?>
        <div class="result-container">
            <h2>Ping Results for: <strong><?php echo htmlspecialchars($_POST['hostname']); ?></strong></h2>
            <pre><?php echo htmlspecialchars($pingResult); ?></pre>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
