<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration Page</title>
    <style>
        body {
            font-family: Helvetica, Sans Serif, Arial;
        }
        table
        {
            padding 2px;
        }
    </style>
</head>
<body>
    <form method="post">
        Full Name: <input type="text" name="fullname" placeholder="Lastname, Firstname, MI"><br>
        Age: <input type="number" name="age" placeholder="18"> <br>
        Birth Date: <input type="date" name="birthdate"> <br>
        Address: <input type="text" name="address" placeholder="Wood District, Corporate Woods"> <br>
        <br>
        Year Level:
        <select name="yearLevel">
            <option value="Pre-School">Pre-School</option>
            <option value="Grade School">Grade School</option>
            <option value="High School">High School</option>
            <option value="College">College</option>
        </select>
        <br>
        Payment Method:
        <select name="paymentMethod">
            <option value="Cash">Cash</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Check">Check</option>
            <option value="Scholarship">Scholarship</option>
        </select>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fullname = $_POST['fullname'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $yearLevel = $_POST['yearLevel'];
        $paymentMethod = $_POST['paymentMethod'];

        // Output table header
        echo "<h2>Registration Details</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>";
        
        // Output each form field and its value in a table row
        echo "<tr><td>Full Name</td><td>$fullname</td></tr>";
        echo "<tr><td>Age</td><td>$age</td></tr>";
        echo "<tr><td>Birth Date</td><td>$birthdate</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";
        echo "<tr><td>Year Level</td><td>$yearLevel</td></tr>";
        echo "<tr><td>Payment Method</td><td>$paymentMethod</td></tr>";

        // Close the table
        echo "</table>";
    }
    ?>
</body>
</html>
