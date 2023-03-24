<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // $users = User::all();
        $users = User::limit(10)->get();

        // $map = [];

        // $users->each(function($user) use ($map){
        //     $map[] = $user->name;
        // });

        // dd(memory_get_usage() / 1024 / 1024);


        $numberCollection = collect([1,2,3,4,5,6,7,8,9,0]);
        $anotherNumberCollection = collect([10,20,30,40,50,60,70,80,90]);
        $assocWorkerCollection = collect([
            [
                'name' => 'Boris',
                'age' => 20
            ],
            [
                'name' => 'Ivan',
                'age' => 19
            ],
            [
                'name' => 'Elena',
                'age' => 32
            ],
            [
                'name' => 'Sveta',
                'age' => 21
            ],
            [
                'name' => 'Darya',
                'age' => 12
            ]
            ]);

            $nameCollection = collect(['Ivan', 'Boris', 'Sveta', 'Darya']);
            $anotherNameCollection = collect(['Nina', 'Diana']);

            $anotherNameCollection->dd();
            // dd($users->all());
    }
}
