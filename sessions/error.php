<?php

session_start();

echo  '<p style="color: red">' .$_SESSION['error'] . '<p/>';
echo '<a href="login.html">Try again</a>';
