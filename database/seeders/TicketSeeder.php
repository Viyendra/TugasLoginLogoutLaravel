<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create(['name' => 'Tiket Reguler', 'price' => 150000]);
        Ticket::create(['name' => 'Tiket VIP', 'price' => 250000]);
    }
}
