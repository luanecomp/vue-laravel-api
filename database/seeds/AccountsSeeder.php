<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
	    	'bank' => 'Nubank',
	    	'titular' => 'Richard Y. English',
	    	'account' => '123456-8',
	    	'balance' => 100.67
	    ]);

	    Account::create([
	    	'bank' => 'Inter',
	    	'titular' => 'Eleanor M. Jeffries',
	    	'account' => '32145-9',
	    	'balance' => 35483.50
	    ]);

	    Account::create([
	    	'bank' => 'Caixa Econômica Federal',
	    	'titular' => 'Federico J. Blevins',
	    	'account' => '2722-1',
	    	'balance' => 170.80
	    ]);

	    Account::create([
	    	'bank' => 'Banco do Brasil',
	    	'titular' => 'Daniel Barbosa Carvalho',
	    	'account' => '12145-9',
	    	'balance' => 99.99
	    ]);

	    Account::create([
	    	'bank' => 'Bradesco',
	    	'titular' => 'Mariana Lima Azevedo',
	    	'account' => '33656-3',
	    	'balance' => 1987.59
	    ]);

	    Account::create([
	    	'bank' => 'Santander',
	    	'titular' => 'Bruna Cunha Azevedo',
	    	'account' => '7411-x',
	    	'balance' => 7000.33
	    ]);

	    Account::create([
	    	'bank' => 'Banco do Brasil',
	    	'titular' => 'Isabella Ribeiro Goncalves',
	    	'account' => '1111-0',
	    	'balance' => 1452.01
	    ]);

	    Account::create([
	    	'bank' => 'Banco Neon',
	    	'titular' => 'Letícia Pereira Lima',
	    	'account' => '4133-9',
	    	'balance' => 10000.00
	    ]);
    }
}
