<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$jsonArrayResponse = json_decode($result, true);
///print_r($jsonArrayResponse);
curl_close($ch);

$count = 1;
$output = "";

foreach ($jsonArrayResponse as $data) {
    $output .= "
        <tr>
        <th scope='row'>{$count}</th>
        <td>{$data['userId']}</td>
        <td>{$data['id']}</td>
        <td>{$data['title']}</td>
        <td>{$data['body']}</td>
        </tr>";
    $count++;
}
echo ($output);
?>