<?php
$param_name = isset($_REQUEST["name"]) ? trim($_REQUEST["name"]) : "";
?>

<html>

<head>
    <title>Hello App</title>

<body>
    <h1>Hello</h1>
    What is your name?
    <form method="POST" action="<?php print $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="name" value="<?php print $param_name ?>" autocomplete="off">
        <input type="submit" value="Say Hello">
    </form>

    <?php
    if ($param_name != "") {
        print "<h2>Hello " . $param_name . " !</h2>";
    }
    ?>
</body>

</html>
