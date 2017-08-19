<?php
foreach ($res as $resv) {

    echo '<table class="table table-primary task-table">';
    echo '<tr>';
    echo '<td>' . $resv['username'] . '</td>';
    echo '<td>' . $resv['e-mail'] . '</td>';
    echo '<td>' . $resv['text'] . '</td>';
    echo '<td>' . $resv['image'] . '</td>';
    echo '<td>' . $resv['status'] . '</td>';
    echo '</tr>';
    echo '</table>';
}
?>

