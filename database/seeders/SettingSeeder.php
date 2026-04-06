<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\SettingItem;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'siteConfig' => Setting::updateOrCreate(['name' => 'Site Config']),
            'alamat'    => Setting::updateOrCreate(['name' => 'Alamat']),
            'medsos'    => Setting::updateOrCreate(['name' => 'Media Sosial']),
            'layanan'    => Setting::updateOrCreate(['name' => 'Layanan & Harga']),
        ];

        $settingItems = [
            [
                'setting_id'  => $settings['siteConfig']->id,
                'name'        => 'Site Name',
                'key'         => 'site_name',
                'type'        => 'text',
                'value'       => 'Akses Jambisnis',
                'helper_text' => 'Nama Website ',
            ],
            [
                'setting_id'  => $settings['siteConfig']->id,
                'name'        => 'Website URL',
                'key'         => 'website_url',
                'type'        => 'url',
                'value'       => 'https://jambisnis.com/',
                'helper_text' => 'jambisnis.com | Berita bisnis Jambi',
            ],
            // [
            //     'setting_id'  => $settings['siteConfig']->id,
            //     'name'        => 'Logo',
            //     'key'         => 'logo',
            //     'type'        => 'file',
            //     'value'       => null,
            //     'helper_text' => null,
            // ],
            // [
            //     'setting_id'  => $settings['siteConfig']->id,
            //     'name'        => 'Favicon',
            //     'key'         => 'favicon',
            //     'type'        => 'file',
            //     'value'       => null,
            //     'helper_text' => null,
            // ],
            //         [
            //             'setting_id' => $settings['siteConfig']->id,
            //             'name'       => 'Meta',
            //             'key'        => 'meta',
            //             'type'       => 'textarea',
            //             'value'      => '<meta name="description" content="" />
            // <meta property = "og:title" content       = "SITE NAME" />
            // <meta property = "og:description" content = "" />
            // <meta property = "og:type" content        = "website" />
            // <meta property = "og:url" content         = "https://example.com" />
            // <meta property = "og:image" content       = "" />',
            //             'helper_text' => null,
            //         ],
            [
                'setting_id'  => $settings['alamat']->id,
                'name'        => 'Alamat',
                'key'         => 'alamat',
                'type'        => 'text',
                'value'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptas!',
                'helper_text' => 'Alamat Jambisnis',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'Email',
                'key'         => 'email',
                'type'        => 'email',
                'value'       => 'example@email.com',
                'helper_text' => 'Email Jambisnis',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'WhatsApp',
                'key'         => 'wa',
                'type'        => 'number',
                'value'       => '6282299160460',
                'helper_text' => '+62822-9916-0460 . Chat Langsung',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'Instagram',
                'key'         => 'ig',
                'type'        => 'url',
                'value'       => 'https://www.instagram.com/jambisniscom?utm_source=qr&igsh=N2Z5ZGt2NXUxdTk3',
                'helper_text' => '@jambisniscom · Follow untuk update',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'Tiktok',
                'key'         => 'tt',
                'type'        => 'url',
                'value'       => 'https://www.tiktok.com/@jambisnisnews?_r=1&_t=ZS-958ffkf3G9l',
                'helper_text' => '@jambisnisnews · Video bisnis terkini',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'Youtube',
                'key'         => 'yt',
                'type'        => 'url',
                'value'       => 'https://youtube.com/@jambisnis?si=RZMjv9oNHPN-RBp6',
                'helper_text' => '@jambisnis · Subscribe sekarang',
            ],
            [
                'setting_id'  => $settings['medsos']->id,
                'name'        => 'Facebook',
                'key'         => 'fb',
                'type'        => 'url',
                'value'       => 'https://www.facebook.com/share/18G6o8c2PE/',
                'helper_text' => 'Jambisnis.com · Like & Follow',
            ],
            [
                'setting_id'  => $settings['layanan']->id,
                'name'        => 'Paket Viral Exposure',
                'key'         => 'hl',
                'type'        => 'url',
                'value'       => 'https://drive.google.com/file/d/1i-xpo9IwFlG8rZfbYTQo5FWlTk8fv8lm/view?usp=drive_link',
                'helper_text' => 'Exposure Tanpa Batas',
            ],
            [
                'setting_id'  => $settings['layanan']->id,
                'name'        => 'Premium Agency Support',
                'key'         => 'ha',
                'type'        => 'url',
                'value'       => 'https://drive.google.com/file/d/15M7wwvi2vGyVclGRzl_wKiONNzWKfCM7/view?usp=drive_link',
                'helper_text' => 'Kualitas premium, performa maksimal',
            ],
            [
                'setting_id'  => $settings['layanan']->id,
                'name'        => 'UMKM Go Viral',
                'key'         => 'umkm',
                'type'        => 'url',
                'value'       => 'https://drive.google.com/file/d/1jfW2dHze2SEas7RKxvd-Q9lAqxGpqWz3/view?usp=drive_link',
                'helper_text' => 'Tumbuh Cepat Tanpa Mahal',
            ],
            [
                'setting_id'  => $settings['layanan']->id,
                'name'        => 'Saluran WhatsApp',
                'key'         => 'sa',
                'type'        => 'url',
                'value'       => 'https://whatsapp.com/channel/0029Vb7Mhpr89inYqVlQe81n',
                'helper_text' => 'Ikuti saluran resmi Jambisnis.com',
            ],
        ];
        foreach ($settingItems as $settingItem) {
            SettingItem::updateOrCreate(['name' => $settingItem['name']], $settingItem);
        }
    }
}
