<!--Code credit to W3school and another website here:
 https://dev.to/anthonys1760/how-to-insert-form-data-into-a-database-using-html-php-2e8-->
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <?php
        // Set up server
        $servername = "localhost";
        $username = "root";
        $password = "24@mcGill.1176-ws";
        $dbname = "Patients";

        // Create connection
        $conn = new mysqli($servername, $username, 
        $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }
        
        $name = $_REQUEST['name'];
        $triage = $_REQUEST['triage'];
        $age = $_REQUEST['age'];
        $phase = $_REQUEST['phase'];
        $state = $_REQUEST['state'];

        $sql = "INSERT INTO patients (name, triage, age, phase, state) VALUES 
        ('$name', '$triage', '$age', '$phase', '$state')";

        if ($conn->query($sql) === TRUE) {
            echo "Thank you! Your registration has been recorded.";
        } 
        else {
            echo "error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    ?>
</html>
