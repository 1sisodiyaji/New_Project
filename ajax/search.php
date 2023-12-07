<?php
include '../dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['searchItem'] == NULL) {
        $response = ['type' => 'error', 'message' => 'Please Enter Your search item'];
    } else {
        $searchItem = mysqli_real_escape_string($link, $_POST['searchItem']); // Sanitize input to prevent SQL injection

        $query = "SELECT item_name,	Item_Price FROM `item_price` WHERE item_name = '$searchItem' ";
        $resQuery = mysqli_query($link, $query);

        if ($resQuery) {
            if ($row = mysqli_fetch_assoc($resQuery)) {
                $response = ['type' => 'success', 'display1' => $row['item_name'], 'display2' => $row['item_price']];
            } else {
                $response = ['type' => 'error', 'message' => 'Item not found'];
            }
        } else {
            $response = ['type' => 'error', 'message' => 'Query execution failed'];
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
