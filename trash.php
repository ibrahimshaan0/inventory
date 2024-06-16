// UN USED Parts of code

<?php

session_start();
header("Location: index.php");

for ($i = 0; $i < 10; $i++) :
?>
    <tr>
        <td>
            B0PC<?php echo $i; ?>
        </td>
        <td>
            PC<?php echo $i; ?>
        </td>
        <td>
            Desktop
        </td>
        <td>
            Grade C
        </td>
        <td>
            Working
        </td>
        <td>
            <a href="#">
                <span class="material-symbols-outlined action-icons">
                    edit
                </span>
            </a>
        </td>
        <td>
            <a href="#">
                <span class="material-symbols-outlined action-icons">
                    delete
                </span>
            </a>
        </td>
    </tr>
<?php
endfor;
?>