<?php
if (isset($_POST["submit"])) {
    echo "Yippie";
}
else {
header ("location: ../registerpage.html");
}