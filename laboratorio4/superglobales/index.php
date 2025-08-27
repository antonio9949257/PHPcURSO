<?php
// 1. $GLOBALS
echo "<h1>$GLOBALS</h1>";
$x = 5;
$y = 10;

function suma() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

suma();
echo $z;
echo "<hr>";

// 2. $_SERVER
echo "<h1>$_SERVER</h1>";
echo "\$_SERVER['PHP_SELF']: " . $_SERVER['PHP_SELF'] . "<br>";
echo "\$_SERVER['SERVER_NAME']: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "\$_SERVER['HTTP_HOST']: " . $_SERVER['HTTP_HOST'] . "<br>";
// HTTP_REFERER might not be set
echo "\$_SERVER['HTTP_REFERER']: " . ($_SERVER['HTTP_REFERER'] ?? 'Not set') . "<br>";
echo "\$_SERVER['HTTP_USER_AGENT']: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "\$_SERVER['SCRIPT_NAME']: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "<hr>";

// Example for GET, POST, REQUEST
echo "<h1>$_GET, $_POST, $_REQUEST</h1>";
echo '<a href="index.php?fname=John&lname=Doe">Click here to send data via GET</a><br><br>';

echo '<form method="POST" action="index.php">
    Name: <input type="text" name="fname">
    <input type="submit" value="Send via POST">
  </form>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Data from $_POST:</h2>";
    if (!empty($_POST['fname'])) {
        $name = $_POST['fname'];
        echo "Hello, $name!";
    } else {
        echo "Name is empty in POST.";
    }
}

if (isset($_GET['fname'])) {
    echo "<h2>Data from $_GET:</h2>";
    $name = $_GET['fname'];
    echo "Hello, $name!";
}

if (isset($_REQUEST['fname'])) {
    echo "<h2>Data from $_REQUEST:</h2>";
    $name = $_REQUEST['fname'];
    echo "Hello, $name!";
}

// Other superglobals are better demonstrated in other contexts
// $_FILES for file uploads
// $_COOKIE and $_SESSION for session management
// $_ENV for environment variables
?>