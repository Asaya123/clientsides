<?php
$visaInfo = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a country was selected
    if (empty($_POST["country"])) {
        $visaInfo = "Invalid country selection.";
    } else {
        // Get the selected country
        $country = $_POST["country"];

        // Determine visa information based on selected country
        switch ($country) {
            case "usa":
                $visaInfo = "Visa required for most applicants.";
                break;
            case "canada":
                $visaInfo = "Visa required unless you have an eTA.";
                break;
            case "australia":
                $visaInfo = "Visa required before travel.";
                break;
            case "india":
                $visaInfo = "Visa depends on the duration of stay.";
                break;
            case "china":
                $visaInfo = "eVisa available for eligible travelers.";
                break;
            default:
                $visaInfo = "Invalid country selection.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Information Result</title>
</head>
<body>

    <h2>Visa Information Result</h2>
    <p><?php echo $visaInfo; ?></p>

    <br>
    <a href="index.html">Back to form</a>

</body>
</html>
