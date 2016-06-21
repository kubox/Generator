<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトファイルシステムディスク
    |--------------------------------------------------------------------------
    |
    | フレームワークにより使用されるべき、デフォルトのファイルシステムを
    | ここに指定してください。"local"ドライバーの他に、様々なクラウド
    | ベースのドライバーを選択することができます。どんどん保存しましょう！
    |
    | サポートドライバー: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | デフォルトクラウドファイルシステムディスク
    |--------------------------------------------------------------------------
    |
    | 多くのアプリケーションが、ローカルとクラウドの両方にファイルを保存します。
    | このため、ここでデフォルトの「クラウド」ドライバーを指定できます。
    | このドライバーはコンテナの中で、クラウドディスク実装として結合されます。
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | ファイルシステムディスク
    |--------------------------------------------------------------------------
    |
    | ここで好きなだけ、ファイルシステム「ディスク」を設定できます。
    | 同じドライバーに複数のディスクを設定することも可能です。指定が必要な
    | オプションの例として、各ドライバーのデフォルトが用意されています。
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root'   => storage_path('app'),
        ],

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',

            // 追加のFTP設定…
            // 'port'     => 21,
            // 'root'     => '',
            // 'passive'  => true,
            // 'ssl'      => true,
            // 'timeout'  => 30,
        ],

        's3' => [
            'driver' => 's3',
            'key'    => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

        'rackspace' => [
            'driver'    => 'rackspace',
            'username'  => 'your-username',
            'key'       => 'your-key',
            'container' => 'your-container',
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'region'    => 'IAD',
            'url_type'  => 'publicURL',
        ],

    ],

];
