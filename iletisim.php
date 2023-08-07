<!doctype html>
<html>
<head></head>
<style>
body {
    background-color: #a9a9a956;  
}
tr{
    color: #990000;
}
th{
    color: black;
}
table{
    height: 600px;
    width: 900px;
    text-align: left;
    margin: auto;
}
</style>
</head>
 
<body>
<?php
    $kullanıcıadı =$_POST["kullanıcıadı"];
    $mail =$_POST["mail"];
    $telefon =$_POST["telefon"];
    $dtarihi =$_POST["tarih"];
    $mesaj =$_POST["mesaj"];
    $sosyalağ =$_POST["sosyalağ"];
    $cinsiyet =$_POST["cinsiyet"];


    
    echo "<table border='1px'>";
    echo "<tr>";
    echo "<th colspan='2' style='text-align:center;'>İLETİŞİM BİLGİLERİ</th>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;width: px;'>KULLANICI ADI</th>";
    echo "<td style='padding:6px;'>$kullanıcıadı</td>";
    echo "</tr>";
    
    
    echo "<tr>";
    echo "<th style='padding:6px;'>E-MAİIL </th>";
    echo "<td style='padding:6px;'>$mail</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>KULLANICI TELEFON </th>";
    echo "<td style='padding:6px;'>$telefon</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>DOĞUM TARİHİ :</th>";
    echo "<td style='padding:6px;'>$dtarihi</td>";
    echo "</tr>";
    

    
    echo "<tr>";
    echo "<th style='padding:6px;'>MESAJ </th>";
    echo "<td style='padding:6px;'>$mesaj</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>CİNSİYET</th>";
    echo "<td style='padding:6px;'>$cinsiyet</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<th style='padding:6px;'>BİZİ NEREDEN DUYDUNUZ </th>";
    echo "<td style='padding:6px;'>";
    foreach($sosyalağ as $sos) {
        echo $sos . ',';
    };echo"</td>";
    echo "</tr>";
    
    
    
    echo "</table>";



?>
</body>
</html>