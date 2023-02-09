<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function headings(): array
    {

        return [
            "category_id",
            "product_number",
            "product_name",
            "product_image",
            "base_price",
            "base_mrp",
            "weight",
            "unit",
            "description",
            "barcode",
            "min_ord_qty",
            "max_ord_qty",
            "quantity"
        ];
    }
    public function collection()
    {
        return DB::table("product")
            ->join("product_varient", "product_varient.product_id", "=", "product.product_id")
            ->join("store_products", "store_products.p_id", "=", "product.product_id")
            ->where("store_products.store_id", $this->data["store_id"])
            ->get([
                "cat_id",
                "product_number",
                "product_name",
                "product_image",
                "base_price",
                "base_mrp",
                "weight",
                "unit",
                "description",
                "barcode",
                "min_ord_qty",
                "max_ord_qty",
                "quantity"
            ]);
    }
}
