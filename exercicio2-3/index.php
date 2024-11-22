<?php

require_once 'db_connection.php';

mysqli_query($conn, "INSERT INTO programa (codigo, nome) VALUES (1, 'Programa A')");
mysqli_query($conn, "INSERT INTO programa (codigo, nome) VALUES (2, 'Programa B')");
mysqli_query($conn, "INSERT INTO programa (codigo, nome) VALUES (3, 'Programa C')");

function mostrarTabela($conn) {
    $result = mysqli_query($conn, "SELECT * FROM programa ORDER BY codigo");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Código: {$row['codigo']}, Nome: {$row['nome']}\n";
    }
    echo "----------------------\n";
}

echo "Dados iniciais:\n";
mostrarTabela($conn);

echo "Atualizando 'Programa B' para 'Programa Beta'...\n";
mysqli_query($conn, "UPDATE programa SET nome = 'Programa Beta' WHERE codigo = 2");
mostrarTabela($conn);

echo "Deletando 'Programa C'...\n";
mysqli_query($conn, "DELETE FROM programa WHERE codigo = 3");
mostrarTabela($conn);

echo "Filtrando registros onde o nome é 'Programa Beta':\n";
$result = mysqli_query($conn, "SELECT * FROM programa WHERE nome = 'Programa Beta'");
while ($row = mysqli_fetch_assoc($result)) {
    echo "Código: {$row['codigo']}, Nome: {$row['nome']}\n";
}
echo "----------------------\n";

echo "Ordenando registros por nome em ordem decrescente:\n";
$result = mysqli_query($conn, "SELECT * FROM programa ORDER BY nome DESC");
while ($row = mysqli_fetch_assoc($result)) {
    echo "Código: {$row['codigo']}, Nome: {$row['nome']}\n";
}
echo "----------------------\n";


mysqli_close($conn);

?>