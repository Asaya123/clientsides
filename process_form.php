<?php
$errMessage = "";
$successMessage = "";
$name = $passport = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $passport = $_POST['passport'];
    $country = $_POST['country'];

    if (empty($name) || empty($passport) || empty($country)) {
        $errMessage = "All fields are required!";
    } elseif (strlen($passport) < 8 || strlen($passport) > 10) {
        $errMessage = "Invalid passport number!";
    } else {
        $successMessage = "Visa application submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Application</title>
</head>
<body>

    <h2>Visa Application</h2>

    <?php if ($errMessage): ?>
        <div class="error"><?php echo $errMessage; ?></div>
    <?php elseif ($successMessage): ?>
        <div class="success"><?php echo $successMessage; ?></div>
    <?php endif; 


    if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Submitted Data:</h3>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Passport Number:</strong> <?php echo htmlspecialchars($passport); ?></p>
        <p><strong>Selected Country:</strong> <?php echo htmlspecialchars($country); ?></p>
    <?php endif; ?>

</body>
</html>
