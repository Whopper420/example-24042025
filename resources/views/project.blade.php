<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="project.blade.php" action="POST">
        <label for="text">Are you gay?</label>
        <input type="text" id="text" name="text">
        <button>submit</button>
    </form>

    <?php
    if ($_POST['text'] != "no") {
        echo "Why are you gay?";
    } else if ($_POST['text'] == "0192") {
        echo "you are not gay";
    } else {
        echo "why are you gay";
    };
    ?>
</body>

</html>