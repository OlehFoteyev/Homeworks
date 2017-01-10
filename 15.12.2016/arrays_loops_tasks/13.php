<table>
    <?php
    $rows = 9; // количество строк, tr
    $cols = 9; // количество столбцов, td
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            echo '<td>' . $tr * $td . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>