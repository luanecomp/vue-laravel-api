<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Log;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = Account::select('id', 'bank', 'titular', 'account')
            ->orderBy('titular')
            ->get()
            ->toArray();

        return $accounts;
    }

    public function edit($id)
    {
        $account = Account::find($id);
        return response()->json($account);
    }

    public function depositar(Request $request, $id)
    {
        $account = Account::find($id);

        if($account == null){
            return response([
                'error' => 'Account not found'
            ], 400);
        }

        $value = floatval($request->value);

        if($value == null || $value <= 0){
            return response([
                'error' => 'Valor inválido'
            ], 400);
        }

        $account->balance = round($account->balance + $value, 2);
        $account->save();

        return response()->json('Depósito realizado com sucesso.');
    }
    
    public function sacar(Request $request, $id)
    {
        $account = Account::find($id);

        if($account == null){
            return response([
                'error' => 'Account not found'
            ], 400);
        }

        $value = floatval($request->value);

        if($value == null || $value <= 0){
            return response([
                'error' => 'Valor inválido'
            ], 400);
        }

        if($account->balance < $value){
            return response([
                'error' => 'Saldo Insuficiente'
            ], 400);
        }

        $account->balance = round($account->balance - $value, 2);
        $account->save();

        return response()->json('Saque realizado com sucesso.');
    }
    
    public function saldo($id)
    {
        $account = Account::find($id);

        if($account == null){
            return response([
                'error' => 'Account not found'
            ], 400);
        }

        return response([
            $this->doubleToString($account->balance)
        ], 200);
    }

    private function doubleToString($value, $decimais = 2){
        if($value == null || !is_numeric($value)){
            return number_format(0.0, $decimais, ',', '.');
        }

        return number_format($value, $decimais, ',', '.');
    }
}
