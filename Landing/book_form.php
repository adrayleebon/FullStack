<?php
    include "conn.php";

    if (isset($_POST['send'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $date = $_POST['date'];

        $check_val_fname = mysqli_query($conn, "SELECT * FROM book_form WHERE firstName = '$firstName'");
        
        if ($check_val_fname) {
            $val_row_fn = mysqli_num_rows($check_val_fname);

            if ($val_row_fn <= 0) {
                $insert_fn = mysqli_query($conn, "INSERT INTO book_form VALUES('0', '$firstName', '$lastName', '$email', '$phonenumber', '$date')");

                if ($insert_fn) {
?>
                    <script>
                        alert("Successfully Booked");
                        window.location.href = "home.php";
                    </script>
<?php
                } else {
?>
                    <script>
                        alert("No data inserted");
                        window.location.href = "home.php";
                    </script>
<?php
                }
            } else {
?>
                <script>
                    alert("First name is already taken!");
                    window.location.href = "home.php";
                </script>
<?php
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
