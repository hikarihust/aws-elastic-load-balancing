<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;

$ACCESS_KEY="****************";
$SECRET_ACCESS_KEY="**********************";
$BUCKET_NAME="web-quang";
$img_name="anh.jpg";

$s3client = S3Client::factory([
    'credentials' => [
        'key'       => $ACCESS_KEY,
        'secret'    => $SECRET_ACCESS_KEY,
    ],
    'region' => 'us-east-2',
    'version' => 'latest',
]);



$result = $s3client->putObject([
    'ACL'           => 'public-read',
    'Bucket'        => $BUCKET_NAME,
    'Key'           => $img_name,
    'SourceFile'    => $img_name,
    'ContentType'   => mime_content_type($img_name),
]);

echo('<pre>');
var_dump($result);
echo('</pre>');