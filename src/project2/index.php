<?php
$db = array(
    'host' => "mysql", //docker-composeのサービス名でアクセス
    'name' => "my_dev",
    'port' => "3306", //ホストマシンからアクセスするわけではないので、3306
    'id'   => "root",
    'pass'   => "root"
);
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET CHARACTER SET 'utf8'");
$pdo = new PDO('mysql:host='.$db["host"].';port='.$db["port"].';dbname='.$db["name"], $db["id"], $db["pass"], $options);
$stmt = $pdo->query("SELECT * FROM my_table");

mb_send_mail("mailhog@example.com","mailhogTest","本文");

?>
<?php foreach($stmt as $row): ?>
<p>name <?= $row["name"] ?></p>
<?php endforeach; ?>

it works project2

