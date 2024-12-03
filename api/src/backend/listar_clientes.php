<?php
require('../../config/db_connection.php');
$query = "SELECT id, email FROM users";  
$result = pg_query($conn, $query);

if (!$result) {
    echo "<tr><td colspan='3'>Error al obtener los clientes.</td></tr>";
    exit();
}

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "</tr>";
}

pg_close($conn);
?>
