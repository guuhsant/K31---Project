<link rel="stylesheet" href="php.css">
<form class="form">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Email</th>
            </tr>
        </thead>
        
    <?php
        for ($a = 1; $a < 8; $a++){
            echo "<tr>";
            echo "<td id='number'>$a</td>";
            echo "<td id='space'></tb>";
            echo "<td id='space'></tb>";
            echo "<td id='space'></tb>";
            echo "</tr>";
        }
    ?>

    </table>
</form>