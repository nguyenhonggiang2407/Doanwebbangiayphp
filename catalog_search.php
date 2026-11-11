<?php

function findProductsByTitle(mysqli $connection, string $term): mysqli_result
{
    // Treat wildcard characters as part of the entered title.
    $pattern = '%' . strtr($term, ['!' => '!!', '%' => '!%', '_' => '!_']) . '%';
    $statement = $connection->prepare(
        "SELECT id, hinhanh, tensp, giasp, giamgia, soluong FROM sanpham WHERE tensp LIKE ? ESCAPE '!'"
    );
    try {
        $statement->bind_param('s', $pattern);
        $statement->execute();
        return $statement->get_result();
    } finally {
        $statement->close();
    }
}
