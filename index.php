<?php
echo "export SENDGRID_API_KEY='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'" > sendgrid.env
echo "sendgrid.env" >> .gitignore;
source ./sendgrid.env;
require 'vendor/autoload.php';
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("stanislavdmbr@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("stanislavdmbr@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>
