<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['description'])) {
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];

        $data = "Name: " . $name . "\nPhone: " . $phone . "\nDetails: " . $description . "\n\n";

        $file = fopen("customer_queries.txt", "a");
        if ($file) {
            fwrite($file, $data);
            fclose($file);
            echo "<h3>Success: Your details have been saved!</h3>";
            echo "<a href='index.html'>Click here to go back</a>";
        } else {
            echo "<h3>Error: Could not save the data.</h3>";
        }
    } else {
        echo "<h3>Please fill all the fields before submitting.</h3>";
    }
}
?>