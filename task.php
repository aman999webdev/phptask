<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd Numbers</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Even and Odd Numbers</h2>

    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Number</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            for ($i = 1; $i <= 20; $i++) {
                
                $type = ($i % 2 == 0) ? 'Even' : 'Odd';

                
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$type</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS (optional, for any Bootstrap functionality like dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
