<?php
    // require_once 'conn.php';
    require_once 'insert_oper.php';

    // Handle the delete request
    if (isset($_POST['delete'])) {
        $emailToDelete = $_POST['email'];
        $deleteSql = "DELETE FROM employees WHERE email = '$emailToDelete'";
        $result = mysqli_query($conn, $deleteSql);
        // if (mysqli_query($conn, $deleteSql)) {
        //     echo "Record deleted successfully.";
        // } else {
        //     echo "Error deleting record: " . mysqli_error($conn);
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Employees</title>
</head>
<body>

    <section class="mt-5 container">
    <h1 class="text-center mb-3 text-danger">Employee Data</h1>
    <table class="table table-bordered text-center">
    <thead >
        <th class="text-primary">Name</th>
        <th class="text-primary">Age</th>
        <th class="text-primary">Email</th>
        <th class="text-primary">Speciality</th>
        <th class="text-primary">DeleteBtn</th>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM employees";
        $employees = mysqli_query($conn,$sql);
        if(mysqli_num_rows($employees) > 0){
            while($row = mysqli_fetch_assoc($employees)){
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['speciality']}</td>
                    <td>
                        <form action='' method='post'>
                            <input type='hidden' name='email' value='{$row['email']}'>
                            <button type='submit' name='delete' class='btn btn-danger'>Delete Me</button>
                        </form>
                    </td>
                </tr>";
            }
        }
    ?>
    </tbody>
    </table>
    <!-- To Update Value -->
    <h2 class="text-center my-3 text-danger">Update An Employee Data</h2>
    <div class="d-flex justify-content-center mb-5">
        <form action="update_oper.php" method="post">
            <input type="email" name="email" placeholder="Enter Your Email">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </section>
</body>
</html>