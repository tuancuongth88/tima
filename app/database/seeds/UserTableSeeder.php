<?php

class UserTableSeeder extends Seeder {

    public function run() {
        User::create([
            'email'    => 'tuancuong@gmail.com',
            'password' => Hash::make('123456'),
            'username' => 'tuancuong',
            'phone'    => '0984473489',
            'avatar'   => 'a2.jpg',
            'status'   => '1',
            'type'     => '1',
        ]);

    }

}