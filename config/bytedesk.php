<?php

return [
    'base_url' => env('BYTEDESK_BASE_URL', 'https://www.weiyuai.cn'),
    'placement' => env('BYTEDESK_PLACEMENT', 'bottom-right'),
    'auto_popup' => env('BYTEDESK_AUTO_POPUP', false),
    
    'invite' => [
        'show' => env('BYTEDESK_INVITE_SHOW', false),
        'text' => env('BYTEDESK_INVITE_TEXT', '需要帮助么'),
    ],
    
    'bubble' => [
        'show' => env('BYTEDESK_BUBBLE_SHOW', true),
        'icon' => env('BYTEDESK_BUBBLE_ICON', '👋'),
        'title' => env('BYTEDESK_BUBBLE_TITLE', '需要帮助么'),
        'subtitle' => env('BYTEDESK_BUBBLE_SUBTITLE', '点击我，与我对话'),
    ],
    
    'theme' => [
        'theme' => env('BYTEDESK_THEME', 'system'),
        'background_color' => env('BYTEDESK_BACKGROUND_COLOR', '#0066FF'),
        'text_color' => env('BYTEDESK_TEXT_COLOR', '#ffffff'),
    ],
    
    'window' => [
        'width' => env('BYTEDESK_WINDOW_WIDTH', '380'),
    ],
    
    'chat' => [
        'org' => env('BYTEDESK_ORG', 'df_org_uid'),
        't' => env('BYTEDESK_T', '2'),
        'sid' => env('BYTEDESK_SID', '1563916182225159'),
    ],
]; 