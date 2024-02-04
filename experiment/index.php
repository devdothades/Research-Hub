<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="backend.php" method="post" id="LOGIN">
<!--    <input type="text" placeholder="database name" name="sql_table">-->
    <select class="form-select mt-1" aria-label="Default select example" name="category">
        <option selected disabled>Select Category</option>
        <option value="Natural Sciences">Natural Sciences</option>
        <option value="Social Sciences">Social Sciences</option>
        <option value="Humanities">Humanities</option>
        <option value="Engineering_Technology">Engineering & Technology</option>
        <option value="Health_Sciences">Health Sciences</option>
        <option value="Environmental_Sciences">Environmental Sciences</option>
        <option value="Mathematics_Statistics">Mathematics & Statistics</option>
        <option value="Business_Economics">Business & Economics</option>
        <option value="Education">Education</option>
        <option value="ICT">Information and Communication Technology</option>
        <option value="Agricultural_Environmental_Sciences">Agriculture & Environmental Sciences</option>
        <option value="Law_Legal_Studies">Law & Legal Studies</option>
        <option value="Fine_Arts_Performing_Arts">Fine Arts & Performing arts</option>
        <option value="Psychology_Behavioral_Sciences">Psychology & Behavioral Sciences</option>
        <option value="Space_Planetary_Sciences">Space & Planetary Sciences</option>
    </select>
</form>
<button id="submit">Submit</button>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="./index.js"></script>
</body>
</html>