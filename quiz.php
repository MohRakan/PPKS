<?php 

include 'koneksi.php';

// Ambil nilai dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];

// Kunci jawaban
$answers = array(
  'q1' => 'c',
  'q2' => 'b',
  'q3' => 'c',
  'q4' => 'b',
  'q5' => 'd',
  'q6' => 'b',
  'q7' => 'b',
  'q8' => 'b',
  'q9' => 'c'
);

// Hitung skor
$score = 0;
foreach ($answers as $key => $value) {
  if ($_POST[$key] == $value) {
    $score++;
  }
}

// Simpan ke database
$sql = "INSERT INTO question (nama, nim,  no1, no2, no3, no4, no5, no6, no7, no8, no9, score) VALUES ('$nama', '$nim', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$score')";

if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('Berhasil mengisi Quiz');
        window.location='home2.html';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>