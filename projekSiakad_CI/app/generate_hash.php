<?php
// Gunakan fungsi password_hash untuk menghasilkan hash
$password = 'Agung123'; // Ganti dengan password yang ingin di-hash
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Hash: $hash";
