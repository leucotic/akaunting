<?php

return [

    'next'                  => 'İleri',
    'refresh'               => 'Yenile',

    'steps' => [
        'requirements'      => 'Lütfen, aşağıdaki sistem gereksinimlerini karşılayın!',
        'language'          => 'Adım 1/3 : Dil Seçimi',
        'database'          => 'Adım 2/3 : Veritabanı Ayarları',
        'settings'          => 'Adım 3/3 : Şirket ve Yönetici Bilgileri',
    ],

    'language' => [
        'select'            => 'Dil Seçin',
    ],

    'requirements' => [
        'php_version'       => 'PHP sürümünüz 5.6.4 veya üstü olmalıdır!',
        'enabled'           => ':feature etkin olmalıdır!',
        'disabled'          => ':feature devre dışı bırakılmalıdır!',
        'extension'         => ':extension eklentisi yüklenmelidir!',
        'directory'         => ':directory dizini yazılabilir olmalıdır!',
    ],

    'database' => [
        'hostname'          => 'Sunucu',
        'username'          => 'Kullanıcı',
        'password'          => 'Şifre',
        'name'              => 'Veritabanı',
    ],

    'settings' => [
        'company_name'      => 'Şirket Adı',
        'company_email'     => 'Şirket e-Postası',
        'admin_email'       => 'Yönetici e-Postası',
        'admin_password'    => 'Yönetici Şifresi',
    ],

    'error' => [
        'connection'        => 'Hata: Veritabanına bağlanamıyoruz! Lütfen veritabanı bilgilerini kontrol ediniz.',
    ],

];
