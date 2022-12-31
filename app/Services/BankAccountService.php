<?php

namespace App\Services;

use App\Models\BankAccount;
use DB;
use PhpParser\Node\Stmt\Static_;

/**
 * Class BankAccountService.
 */
class BankAccountService
{

    public static function getAllAccounts($storeId)
    {
        return BankAccount::where("store_id", $storeId)
            ->get();
    }
    public static function getAllAccountsPaginated($storeId)
    {
        return BankAccount::where("store_id", $storeId)
            ->paginate(10);
    }
    public static function getAllActiveAccounts($storeId)
    {
        return BankAccount::where("store_id", $storeId)
            ->where("account_status", "on")
            ->get();
    }
    public static function getAllInActiveAccounts($storeId)
    {
        return BankAccount::where("store_id", $storeId)
            ->where("account_status", "off")
            ->get();
    }
}
