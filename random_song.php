<?php
$dir = 'mp3';
$files = glob($dir . '/*.mp3');

$currentTime = time();
$dataFile = 'play_library.json';

$data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : null;

if ($data && isset($data['title']) && isset($data['totalTime']) && isset($data['startTime'])) {
    $startTimestamp = $data['startTime'];
    $totalTime = $data['totalTime'];
    
    if ($currentTime - $startTimestamp >= $totalTime) {
        $randomFile = $files[array_rand($files)];
        $songDuration = 180;

        $data['title'] = $randomFile;
        $data['totalTime'] = $songDuration;
        $data['startTime'] = $currentTime;
    } else {
        $randomFile = $data['title'];
    }
} else {
    $randomFile = $files[array_rand($files)];
    $songDuration = 180;

    $data = [
        'title' => $randomFile,
        'totalTime' => $songDuration,
        'startTime' => $currentTime,
    ];
}

file_put_contents($dataFile, json_encode($data));

echo json_encode([
    'song' => $randomFile,
    'timeOffset' => $currentTime - $data['startTime'],
]);
?>
