<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
        'email' => 'restgo@admin.com',
        'nama_restaurant' => 'Restgo Restaurant',
        'akreditasi' => 'Bintang 5',
        'jenis_restaurant' => 'Seafood & Japaneese Food',
        'alamat' => 'Jln Kemang Selatan No 2 ,Jakarta Selatan',
        'no_telp' => '081221212223',
        'waktu_buka' => '06:00 AM',
        'waktu_tutup' => '12:00 PM',
      ]);
    }
}
