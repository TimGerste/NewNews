<?php
$GLOBALS['_ta_campaign_key'] = '46cb9d8f25f7fc29112563a1ff000af3';
$GLOBALS['_ta_debug_mode'] = false; 

require 'bootloader_857e3c48c5db80541c35e35ecdaa94ad.php';

$campaign_id = 'h6ba97';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();



switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); 
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    
}


?>