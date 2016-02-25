<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Config::create([
            'title'=>'Công ty Cổ phần Dịch vụ Thiết bị đo và Hệ thống điều khiển',
            'description'=>'Công ty Cổ phần Dịch vụ Thiết bị đo và Hệ thống điều khiển',
            'keywords'=>'Công ty, Cổ phần, Dịch vụ, Thiết bị, đo lường, hệ thống điều khiển',
            'facebook'=>'http://facebook.com',
            'youtube'=>'https://youtube.com/',
            'twitter'=>'https://twitter.com/',
            'google'=>'https://google.com/',
            'email'=>'nam.ngo@vietcis.com.vn',
            'phone'=>'+84 4 3540 2685',
            'timeword' =>'08:00 - 18:00',
            'office' =>'2',
            'staff' =>'86',
            'born' =>'2000',
            'introleft' =>'Nhà phân phối chính thức của các nhà sản xuất thiết bị hàng đầu thế giới',
            'introright' =>'Bạn cần được tư vấn để hiểu rõ hơn về dịch vụ và sản phẩm mình quan tâm?',
            'copyright'=>'Copyright © 2016 VietCIS.,JSC. All rights reserved.',
            'address' => 'dia chi',
            'countdown'=>date('Y-m-d H:i:s'),
            ]);
    }
}
