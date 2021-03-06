<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Config options for the Slack Pingbot
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    'api-url'               => '',
    'api-token'             => env('SLACK_API_TOKEN'),

    'post-url'              => env('SLACK_POST_URL'),

    'command-hash'          => env('PING_TOKEN'),

    'ping-allowed-channels' => [
        'G04G7KMFM',    // p_fc_chat (Specific to a given slack team)
        'G04HPDE74',    // cap_fcs
    ],
    'ping-announce-channel' => 'p_fc_chat',

    'ping-bot-name' => 'Ghost of Empress Jamyl',
    'ping-bot-emoji' => ':jamyl:',

    'ping-bots' => [
        'fc' => [
            'destination'   => 'p_fc_pings',
            'title'         => 'FC Group Ping',
            'pre-text'      => "",
            'color'         => 'warning',
            'announce'      => false
        ],
        'titan' => [
            'destination'   => 'titan_pings',
            'title'         => ':bridge: Titan Ping',
            'pre-text'      => "A member of the FC team has sent the following message:\n",
            'color'         => 'danger',
            'announce'      => true
        ],
        'test' => [
            'destination'   => 'api_test',
            'title'         => ':bridge: Titan Ping',
            'pre-text'      => "A member of the FC team has sent the following message:\n",
            'color'         => 'good',
            'announce'      => false
        ],
        'capfc' => [
            'destination'   => 'cap_fcs',
            'title'         => 'Capital Support Ping',
            'pre-text'      => "One of the FCs seems to foolishly think caps are a good idea today:\n",
            'color'         => '#439FE0',
            'announce'      => false
        ],
        'all' => [
            'destination'   => '#p-fleet',
            'title'         => 'Ping',
            'pre-text'      => "",
            'color'         => '#439FE0',
            'announce'      => false
        ],
        'profidence' => [
            'destination'   => 'profidence',
            'title'         => 'Cap ping',
            'pre-text'      => "",
            'color'         => '#439FE0',
            'announce'      => false
        ],
        'c_caps' => [
            'destination'   => 'c_caps',
            'title'         => 'CVA Cap ping',
            'pre-text'      => "",
            'color'         => '#439FE0',
            'announce'      => false
        ],
        'no_caps' => [
            'destination'   => 'no_caps',
            'title'         => 'Super Troopers Ho!!!',
            'pre-text'      => "",
            'color'         => 'warning',
            'announce'      => false
        ],
        'scrubs' => [
            'destination'   => 'scrubs_and_shitlords',
            'title'         => 'Listen up, shitlords.',
            'pre-text'      => '',
            'color'         => 'danger',
            'announce'      => false
        ],
    ],

    'help-text' => "The ping bot is now multi-function!\n"
        ."Usage: /ping <type> [message]\n"
        ."Available types:\n"
        ."all - Sends ping to chatadel, goes to all registered users.\n"
        ."fc - Sends ping to p_fc_pings.\n"
        ."titan - Sends ping to the titan channel. Use this to request a bridge.\n"
        ."capfc - Sends ping to cap_fcs channel. Use to request cap support.",

];
