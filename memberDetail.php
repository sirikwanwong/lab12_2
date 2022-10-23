<?php
    $keyword = $_GET["keyword"];
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $stmt = $pdo->prepare("SELECT * FROM member where username like '%$keyword%'"); 
    $stmt->execute();
            
?>
<?php while($row=$stmt->fetch()): ?>
    ชื่อ : <?=$row["name"]?><br>
    username : <?=$row["username"]?><br>
    รหัสผ่าน : <?=$row["password"]?><br>
    ที่อยู่: <?=$row["address"]?><br>
    โทรศัพท์: <?=$row["mobile"]?><br>
    อีเมล์: <?=$row["email"]?><br>
<?php endwhile; ?>