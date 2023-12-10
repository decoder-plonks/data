<!-- process_form.php -->
<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    echo "<p>Hello, $name! Welcome to our website.</p>";
}
?>
