<?php
require_once 'Student.php';
require_once 'StudentManager.php';

$studentManager = new StudentManager();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $student = new Student($name, $age, $email);
    $studentManager->addStudent($student);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Information</title>
</head>

<body>
    <h2>Student Information Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        <?php
        $students = $studentManager->getStudents();
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($student->name) . "</td>";
            echo "<td>" . htmlspecialchars($student->age) . "</td>";
            echo "<td>" . htmlspecialchars($student->email) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>