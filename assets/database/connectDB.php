<div>
    <?php

    function alert($message)
    {
        echo "<script>alert('$message')</script>";
    }

    function callDB($servername, $username, $password, $databaseName)
    {
        // Create connection
        $connect = new mysqli($servername, $username, $password);
        // Check connection
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        } else alert('OK');

        $sql = "use $databaseName; Select * from brand;";
        //     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com')";

        if ($connect->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }

        $connect->close();
    }

    callDB("localhost", "root", "123456", "smartphone");

    ?>
</div>