<?php 


include_once 'UrlHelper.php';

$menuItems = ['home', 'about', 'contact-us'];

$helper = new UrlHelper();

foreach ($menuItems as $item) {
    echo '<div>';
    $url = $helper->makeUrl($item);
    if($item == 'about') {
        $url->addParams([
            'page' => 2,
            'scrlollto' => '#contacts'
        ]);
    }
    echo $url->getUrl();
    echo '</div>';
}
