<?php
echo "1";
 // Establish Connection with Parse Database
    require_once 'parse-php-sdk/autoload.php';
echo "2";
    use Parse\ParseClient;

echo "string";

$app_id = "L65oTrxZJ2ez6CZB4S1Pwgof29tfvzocufbEO06t" ;
$rest_key ="n12lYBuHY7tGTL7a999GPUqqG7KeIObS5kzDj6Yj";
$master_key ="2EmnrxWrkPsIyRvIjtu3ZTgnqja38W0Ue3oJly0q";
ParseClient::initialize( $app_id, $rest_key, $master_key );


?>