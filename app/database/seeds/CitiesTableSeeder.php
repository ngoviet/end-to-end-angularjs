<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('cities')->insert(array(
			array('id' => '1','name' => 'An Giang','code' => 'AGG'),
			array('id' => '2','name' => 'Bắc Cạn','code' => 'BCN'),
			array('id' => '3','name' => 'Bình Dương','code' => 'BDG'),
			array('id' => '4','name' => 'Bình Định','code' => 'BDH'),
			array('id' => '5','name' => 'Bắc Giang','code' => 'BGG'),
			array('id' => '6','name' => 'Bạc Liêu','code' => 'BLU'),
			array('id' => '7','name' => 'Bắc Ninh','code' => 'BNH'),
			array('id' => '8','name' => 'Bình Phước','code' => 'BPC'),
			array('id' => '9','name' => 'Bến Tre','code' => 'BTE'),
			array('id' => '10','name' => 'Bình Thuận','code' => 'BTN'),
			array('id' => '11','name' => 'Cao Bằng','code' => 'CBG'),
			array('id' => '12','name' => 'Cà Mau','code' => 'CMU'),
			array('id' => '13','name' => 'Cần Thơ','code' => 'CTO'),
			array('id' => '14','name' => 'Điện Biên','code' => 'DBN'),
			array('id' => '15','name' => 'Đắc Nông','code' => 'DCG'),
			array('id' => '16','name' => 'Đắc Lắc','code' => 'DLC'),
			array('id' => '17','name' => 'Đà Nẵng','code' => 'DNG'),
			array('id' => '18','name' => 'Đồng Nai','code' => 'DNI'),
			array('id' => '19','name' => 'Đồng Tháp','code' => 'DTP'),
			array('id' => '20','name' => 'Gia Lai','code' => 'GLI'),
			array('id' => '21','name' => 'Hậu Giang','code' => 'HAG'),
			array('id' => '22','name' => 'Hòa Bình','code' => 'HBH'),
			array('id' => '23','name' => 'TP Hồ Chí Minh','code' => 'HCM'),
			array('id' => '24','name' => 'Hải Dương','code' => 'HDG'),
			array('id' => '25','name' => 'Hà Giang','code' => 'HGG'),
			array('id' => '26','name' => 'Hà Nội','code' => 'HNI'),
			array('id' => '27','name' => 'Hà Nam','code' => 'HNM'),
			array('id' => '28','name' => 'Hải Phòng','code' => 'HPG'),
			array('id' => '29','name' => 'Hà Tĩnh','code' => 'HTH'),
			array('id' => '30','name' => 'Hà Tây','code' => 'HTY'),
			array('id' => '31','name' => 'Huế','code' => 'HUE'),
			array('id' => '32','name' => 'Hưng Yên','code' => 'HYN'),
			array('id' => '33','name' => 'Kiên Giang','code' => 'KGG'),
			array('id' => '34','name' => 'Khánh Hòa','code' => 'KHA'),
			array('id' => '35','name' => 'Kon TUM','code' => 'KTM'),
			array('id' => '36','name' => 'Long An','code' => 'LAN'),
			array('id' => '37','name' => 'Lào Cai','code' => 'LCI'),
			array('id' => '38','name' => 'Lai Châu','code' => 'LCU'),
			array('id' => '39','name' => 'Lâm Đồng','code' => 'LDG'),
			array('id' => '40','name' => 'Lạng Sơn','code' => 'LSN'),
			array('id' => '41','name' => 'Nghệ An','code' => 'NAN'),
			array('id' => '42','name' => 'Ninh Bình','code' => 'NBH'),
			array('id' => '43','name' => 'Nam Định','code' => 'NDH'),
			array('id' => '44','name' => 'Ninh Thuận','code' => 'NTN'),
			array('id' => '45','name' => 'Phú Thọ','code' => 'PTO'),
			array('id' => '46','name' => 'Phú Yên','code' => 'PYN'),
			array('id' => '47','name' => 'Quảng Bình','code' => 'QBH'),
			array('id' => '48','name' => 'Quảng Ninh','code' => 'QNH'),
			array('id' => '49','name' => 'Quảng Ngãi','code' => 'QNI'),
			array('id' => '50','name' => 'Quảng Nam','code' => 'QNM'),
			array('id' => '51','name' => 'Quảng Trị','code' => 'QTI'),
			array('id' => '52','name' => 'Sơn La','code' => 'SLA'),
			array('id' => '53','name' => 'Sóc Trăng','code' => 'STG'),
			array('id' => '54','name' => 'Thái Bình','code' => 'TBH'),
			array('id' => '55','name' => 'Tiền Giang','code' => 'TGG'),
			array('id' => '56','name' => 'Thanh Hóa','code' => 'THA'),
			array('id' => '57','name' => 'Tây Ninh','code' => 'TNH'),
			array('id' => '58','name' => 'Thái Nguyên','code' => 'TNN'),
			array('id' => '59','name' => 'Tuyên Quang','code' => 'TQG'),
			array('id' => '60','name' => 'Trà Vinh','code' => 'TVH'),
			array('id' => '61','name' => 'Vĩnh Long','code' => 'VLG'),
			array('id' => '62','name' => 'Vĩnh Phúc','code' => 'VPC'),
			array('id' => '63','name' => 'Bà Rịa - Vũng Tầu','code' => 'VTU'),
			array('id' => '64','name' => 'Yên Bái','code' => 'YBI')
		));
	}

}