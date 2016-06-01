<?php
$companies = array(
    'alexa.com',
    'google.com',
    'facebook.com',
);
 
foreach($companies as $company){
    $url = "https://logo.clearbit.com/{$company}?size=200&format=png";
    $contents = file_get_contents($url);
    file_put_contents('/images/logos/' . $company . '.png' , $contents);
}
?>
