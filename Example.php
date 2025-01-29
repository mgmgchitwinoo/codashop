<?php
use Namdevel\Codashop;

require __DIR__ . '/vendor/autoload.php';
                                                            header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$app = new Codashop();

$userID = $_POST['userID'] ?? '';
$zoneID = $_POST['zoneID'] ?? '';

if(empty($userID) || empty($zoneID)) {
    echo json_encode(["error" => "User ID & Zone ID are req>
    exit;
}

$response = $app->checkUser("MOBA", $userID, $zoneID);

echo json_encode(["result" => $response]);
?>
