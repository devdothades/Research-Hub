<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/octicons@14.1.0/build.css">
    <title>Research Upload Form</title>
    <style>
        body {
            background: url(../assets/img/background/bg.jpg);
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Research Upload Form</h2>

                <form action="../scripts/upload/upload.php" method="post" enctype="multipart/form-data">
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <!-- Publisher -->
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher:</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" required>
                    </div>

                    <!-- Strand Dropdown -->
                    <div class="mb-3">
                        <label for="strand" class="form-label">Strand:</label>
                        <select class="form-select" id="strand" name="strand" required>
                            <option value="" selected disabled>Select Strand</option>
                            <option value="TVL">TVL</option>
                            <option value="GAS">GAS</option>
                            <option value="STEM">STEM</option>
                            <option value="HUMMS">HUMMS</option>
                            <option value="ABM">ABM</option>
                        </select>
                    </div>

                    <!-- Strand Description -->
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description:</label>
                        <textarea class="form-control" id="strandDescription" name="zDescription" rows="3" required></textarea>
                    </div>

                    <!-- File Upload -->
                    <div class="mb-3">
                        <label for="researchFile" class="form-label">Upload Research File:</label>
                        <input type="file" class="form-control" id="researchFile" name="researchFile" accept=".pdf" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>