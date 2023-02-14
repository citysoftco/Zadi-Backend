<?php

namespace App\Imports;

use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\StringValueBinder;

class ProductsImport  implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    private $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection(Collection $collection)
    {

        foreach ($collection as $index => $row) {
            $baseMrp = str_replace([",", "٫"], "", $this->formatNullValue($row["base_mrp"], 0));
            $basePrice = str_replace([",", "٫"], "", $this->formatNullValue($row["base_price"], 0));


            DB::table("product")->updateOrInsert(["product_number" => $row["product_number"]], [
                "cat_id" => $this->formatNullValue($row["category_id"], 0),
                "product_number" => $row["product_number"],
                "product_name" => $row["product_name"],
                // "product_image" => $row["product_image"],
                "added_by" => $this->data["store_id"]

            ]);
            $productId = DB::table("product")->where("product_number", $row["product_number"])->first()->product_id;
            DB::table("product_varient")->updateOrInsert(["product_id" => $productId], [
                "initial_quantity" => $this->formatNullValue($row["quantity"], 0),
                "weight" => $this->formatNullValue($row["weight"], 0),
                "varient_image" => $row["product_image"],
                "base_mrp" => $baseMrp,
                "base_price" => $basePrice,
                "description" =>  $this->formatNullValue($row["description"], ""),
                "barcode" =>  $this->formatNullValue($row["barcode"], null),
                "unit" =>  $this->formatNullValue($row["unit"], ""),
                "added_by" => $this->data["store_id"]
            ]);

            $varientId = DB::table("product_varient")
                ->join("product", "product.product_id", "=", "product_varient.product_id")
                ->where("product_number", $row["product_number"])->first("varient_id")->varient_id;

            DB::table("store_products")->updateOrInsert(["varient_id" => $varientId], [
                "quantity" => $this->formatNullValue($row["quantity"], 0),
                "mrp" => $baseMrp,
                "price" => $basePrice,
                "min_ord_qty" =>  $this->formatNullValue($row["min_ord_qty"], 1),
                "max_ord_qty" =>  $this->formatNullValue($row["max_ord_qty"], 100),
                "store_id" => $this->data["store_id"]
            ]);
        }
    }
    public function formatNullValue($value, $returnValue)
    {
        if ($value == null)
            return $returnValue;

        return $value;
    }
}
