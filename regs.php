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

$to = "st.dm.br.04@mail.ru";
$subject = "анкета";
$message = "сщщбщение";
  ?>
