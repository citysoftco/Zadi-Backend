<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;
use App\Models\BankAccount;
use App\Models\Store;
use App\Services\BankAccountService;
use App\Services\FileHandleService;
use DB;
use Illuminate\Http\Request;
use Stripe\Service\FileService;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($storeId)
    {

        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $bankAccounts = BankAccountService::getAllAccountsPaginated($storeId);
        $store = Store::find($storeId);
        return view("store.bank-accounts.list", compact("store", "bankAccounts", "logo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($storeId)
    {
        $store = Store::find($storeId);
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        return view("store.bank-accounts.add", compact("store", "logo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankAccountRequest $request, $storeId)
    {
        $data = $request->all();
        $data["store_id"] = $storeId;
        $data["bank_logo"] = FileHandleService::uploadImageInPublicPath($request->bank_logo, "images/banks/images");
        $bankAccount = BankAccount::create($data);
        return back()->withSuccess(trans('keywords.Added Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($storeId, $bankAccountId)
    {
        $store = Store::find($storeId);
        $bankAccount = BankAccount::find($bankAccountId);
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        return view("store.bank-accounts.edit", compact("store", "logo", "bankAccount"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankAccountRequest $request, $storeId, $bankAccountId)
    {
        $data = $request->all();
        $bankAccount = BankAccount::find($bankAccountId);
        $data["bank_logo"] = FileHandleService::updateImageInPublicPath($bankAccount->bank_logo, $request->bank_logo, "images/banks/images");
        $bankAccount->update($data);
        return back()->withSuccess(trans('keywords.Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($storeId, $bankAccountId)
    {
        $bankAccount = BankAccount::find($bankAccountId);
        FileHandleService::deleteImageInPublicPath($bankAccount->bank_logo);
        $bankAccount->delete();
        return back()->withSuccess(trans('keywords.Deleted Successfully'));
    }
}
