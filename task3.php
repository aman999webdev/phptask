<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPtask</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">displaying key and value</h2>

    <?php
    
    $students = [
        ["id" => 1, "name" => "amanullah", "age" => 20, "course" => "c-sharp"],
        ["id" => 2, "name" => "suleman", "age" => 22, "course" => "python"],
        ["id" => 3, "name" => "zaman", "age" => 23, "course" => "javascript"],
        ["id" => 4, "name" => "Azan", "age" => 21, "course" => "dart"]
       
    ];
    ?>

    <!-- table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Key</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            foreach ($students as $student) {
                
                foreach ($student as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($key) . "</td>";
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS (optional for additional functionality like modals, dropdowns, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

