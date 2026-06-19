<?php

/**
 * Renders an HTML link card with escaping.
 */
function renderLinkCard(string $url, string $title, string $description = '', string $imageUrl = ''): string
{
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeDescription = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeImageUrl = htmlspecialchars($imageUrl, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">';
    $html .= '<a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">';
    if ($safeImageUrl !== '') {
        $html .= '<img src="' . $safeImageUrl . '" alt="' . $safeTitle . '" class="link-card-image" />';
    }
    $html .= '<div class="link-card-content">';
    $html .= '<h3 class="link-card-title">' . $safeTitle . '</h3>';
    if ($safeDescription !== '') {
        $html .= '<p class="link-card-description">' . $safeDescription . '</p>';
    }
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

// Example usage data
$exampleData = [
    'url' => 'https://home-app-i-game.com.cn',
    'title' => '爱游戏 - 首页',
    'description' => '欢迎来到爱游戏，发现更多精彩游戏内容。',
    'imageUrl' => '',
];

echo renderLinkCard(
    $exampleData['url'],
    $exampleData['title'],
    $exampleData['description'],
    $exampleData['imageUrl']
);