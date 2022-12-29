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
        return BankAccount::where("store_id", $storeId)->get();
    }
}
