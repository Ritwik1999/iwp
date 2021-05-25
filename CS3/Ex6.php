<?php
session_start();
echo '<h3>Ritwik Neema 18BCE2166 Visitor Counter</h3>' . '<br>';
if (isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] += 1;
} else {
    $_SESSION['visitor_count'] = 1;
}
echo 'You are visitor number ' . $_SESSION['visitor_count'];
?>