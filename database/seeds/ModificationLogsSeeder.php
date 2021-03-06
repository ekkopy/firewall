<?php

use Illuminate\Database\Seeder;
use App\ModificationLog;

class ModificationLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $log = [
            'ip_address' => '127.0.0.1',
            'object' => '1',
            'user_id' => 1,
            'status_id' => 1,
            'operation_id' => 1, 
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]; 

        ModificationLog::insert($log);
    }
}
