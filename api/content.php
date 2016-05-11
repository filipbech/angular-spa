<?php
header('Content-Type: application/json');
$url = isset($_GET['url']) ? $_GET['url'] : '';
$content['status'] = 200;
if ($url == "/home" || $url == "/home/") {
	$content['template'] = 'frontpage.html';
	$content['header'] = 'This is the frontpage';
	$content['content'] = 'here is some brilliant content';
} else if ($url === "/about" || $url === "/about/") {
	$content['template'] = 'subpage.html';
	$content['header'] = 'About us';
	$content['content'] = 'Here you can find some information about us';
} else if ($url === "/gallery" || $url === "/gallery/") {
	$content['template'] = 'gallery.html';
	$content['header'] = 'Gallery';
	$content['content'] = 'Before this state can be resolved, a set of images should be preloaded';
	$content['preload'][0] = 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Altja_j%C3%B5gi_Lahemaal.jpg';
	$content['preload'][1] = 'https://static.pexels.com/photos/3247/nature-forest-industry-rails.jpg';
	$content['preload'][2] = 'https://static.pexels.com/photos/7310/nature-trees-hut-green.jpg';
} else {
	$content['template'] = 'subpage.html';
	$content['header'] = 'Page not found';
	$content['content'] = 'We are terribly sorry!';
	$content['status'] = 404;	
}
echo json_encode($content);