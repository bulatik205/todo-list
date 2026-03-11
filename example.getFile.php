<?php
function getGitHubFile($url) {
    $ch = curl_init();
    
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_USERAGENT => 'PHP Script',
        CURLOPT_SSL_VERIFYPEER => false, 
        CURLOPT_SSL_VERIFYHOST => false  
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if ($httpCode === 200) {
        return $response;
    } else {
        return $response;
    }
}

$url = 'https://raw.githubusercontent.com/bulatik205/todo-list-example/main/example.json';
$jsonContent = getGitHubFile($url);

if ($jsonContent) {
    $data = json_decode($jsonContent, true);

    echo "<pre><code>";
    print_r($data);
    echo "</code></pre>";
} else {
    echo "Не удалось получить файл";
}
?>