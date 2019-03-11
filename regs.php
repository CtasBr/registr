<?php
echo "<link rel='stylesheet' href='regphp.css'>";
$nm = $_POST["nm"];
$em = $_POST["em"];
$nc = $_POST["nc"];
$np = $_POST["np"];
$ncp = $_POST["ncp"];

$nm = htmlspecialchars($nm);
$em = htmlspecialchars($em);
$nc = htmlspecialchars($nc);
$np = htmlspecialchars($np);
$ncp = htmlspecialchars($ncp);

$nm = urldecode($nm);
$em = urldecode($em);
$nc = urldecode($nc);
$np = urldecode($np);
$ncp = urldecode($ncp);

$nm = trim($nm);
$em = trim ($em);
$nc = trim($nc);
$np = trim ($np);
$ncp = trim ($ncp);

//echo $nm;
//echo "<br>";
//echo $em;
//echo "<br>";
//echo $nc;
//echo "<br>";
//echo $np;
//echo "<br>";
//echo $ncp;
$to = "st.dm.br.04@mail.ru";
$subject = "Lol";
$message = "Kek";
if (mail ($to, $subject, $message)){
	echo "<a>Отправлено</a><a href=\'index.php\'> на главную</a>";
} else {
	echo "<a>Ошибка</a>";
}
?>
