<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Import</title>
</head>
<body>
    <h2>Import Data</h2>
    <form action="import_data.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose Excel File:</label>
        <input type="file" name="file" id="file" accept=".xlsx">
        <br>
        <button type="submit">Import Data</button>
    </form>
</body>
</html>