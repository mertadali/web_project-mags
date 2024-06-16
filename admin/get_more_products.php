<?php
include 'db.php';

$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
$initialLimit = 3;

$sql = "SELECT urun_id, kategori_id, urun_ad, urun_resim, urun_aciklama, urun_fiyat FROM urunler LIMIT $initialLimit OFFSET $offset";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["urun_id"] . "</td>
                <td>" . $row["urun_ad"] . "</td>
                <td><img src='data:image/jpeg;base64," . base64_encode($row["urun_resim"]) . "' width='100'/></td>
                <td>" . $row["urun_aciklama"] . "</td>
                <td>" . $row["urun_fiyat"] . "</td>
                <td>
                    <form action='urun_sil.php' method='post' style='display:inline-block;'>
                        <input type='hidden' name='urun_id' value='" . $row["urun_id"] . "' />
                        <input type='submit' value='Sil' />
                    </form>
                </td>
                <td>
                    <form action='urun_duzenle.php' method='get' style='display:inline-block;'>
                        <input type='hidden' name='urun_id' value='" . $row["urun_id"] . "' />
                        <input type='submit' value='Düzenle' />
                    </form>
                </td>
            </tr>";
    }
} else {
    echo ""; // Boş bir yanıt dönülüyor, bu durumda buton kaldırılacak
}

$conn->close();
?>
