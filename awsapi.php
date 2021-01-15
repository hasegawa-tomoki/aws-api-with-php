<?php
require './vendor/autoload.php';

$s3Client = new Aws\S3\S3Client([
    'profile' => 'default',
    'version' => 'latest',
    'region' => 'us-east-2'
]);

$result = $s3Client->headObject([
    'Bucket' => 'bucket-name',
    'Key' => 'path/to/file.jpg',
]);

printf("@metadata.effectiveUri: ".PHP_EOL.'  ');
var_dump($result['@metadata']['effectiveUri']);
printf("versionId: ".PHP_EOL.'  ');
var_dump($result['versionId']);
