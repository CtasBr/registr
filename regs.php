<?php
echo "export SENDGRID_API_KEY='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'" > sendgrid.env;
echo "sendgrid.env" >> .gitignore;
source ./sendgrid.env;
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
$message = "сообщение";
mail ($to, $subject, $message);
  ?>
