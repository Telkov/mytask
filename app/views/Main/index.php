<?php
$count = count($res);

foreach ($res as $resv) {
    echo '<div class="container task-container">';
    echo '<table class="table table-primary task-table">';
    echo '<tr>';
    echo '<th class="task-table__center">Username</th>';
    echo '<th class="task-table__center">Email</th>';
    echo '<th class="task-table__center">Task</th>';
    echo '<th class="task-table__center">Image</th>';
    echo '<th class="task-table__center">Status</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td class="task-table__center">' . $resv['username'] . '</td>';
    echo '<td class="task-table__center">' . $resv['e-mail'] . '</tdtask-table__center>';
    echo '<td class="task-table__center">' . $resv['text'] . '</td>';
    echo '<td class="task-table__center">' . $resv['image'] . '</td>';
    echo '<td class="task-table__center task-status">' . $resv['status'] . '</td>';
    echo '</tr>';
    echo '<tr class="task-action task-table__center">';
    echo '<td class="task-action task-table__center"></td>';
    echo '<td class="task-action task-table__center"></td>';
    echo '<td class="task-action task-table__center">Change</td>';
    echo '<td class="task-action task-table__center">Delete</td>';
    echo '<td class="task-action task-table__center">Done</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
}
?>
