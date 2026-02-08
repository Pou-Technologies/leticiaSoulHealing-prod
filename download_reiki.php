<?php
$url = "https://images.pexels.com/photos/3822622/pexels-photo-3822622.jpeg?auto=compress&cs=tinysrgb&w=800";
$path = 'public/images/reiki-service.jpg';

// Ensure directory exists
if (!file_exists('public/images')) {
    mkdir('public/images', 0755, true);
}

// Download context options
$options = [
    'http' => [
        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'
    ]
];
$context = stream_context_create($options);

$content = file_get_contents($url, false, $context);

if ($content !== false) {
    file_put_contents($path, $content);
    echo "Image downloaded successfully to $path";
} else {
    echo "Failed to download image.";
}
