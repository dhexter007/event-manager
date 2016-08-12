<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\Role;

class InitData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:Data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dumping Init Data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $log = new Log();
        $log->delete(true);

        $role = new Role();
        $role->delete(true);

        $roles = ['owner', 'vendor', 'freelancer'];

        foreach($roles as $idx => $role){
            $role = new Role([
                        'role_id' => (int) $idx+1,
                        'role_name' => $role,
                        'role_icon' => "em-role-".$role
                    ]);
            $role->add();
        }
        
        print_r(Role::all()->toJson());
    }
}
