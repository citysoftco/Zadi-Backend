<?php

namespace App\Imports;

use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {

            $insert_csv0 = array();
            $insert_csv0['cat_id'] = $row[0];
            $insert_csv0['product_name'] = $row[1];
            $insert_csv0['product_image'] = $row[2];


            $insert_csv1 = array();
            $insert_csv1['initial_quantity'] = $row[3];
            $insert_csv1['unit'] = $row[4];
            $insert_csv1['base_mrp'] = $row[5];
            $insert_csv1['base_price'] = $row[6];
            $insert_csv1['description'] = $row[7];
            $insert_csv1['ean'] = $row[8];
        }

        $data = array(
            'cat_id' => $insert_csv0['cat_id'],
            'product_name' => $insert_csv0['product_name'],
            'product_image' => 'images/products/' . $insert_csv0['product_image'],

        );

        $inserted = DB::table('product')->insertGetId($data);
        $data1 = array(
            'product_id' => $inserted,
            'initial_quantity' => $insert_csv1['initial_quantity'],
            'unit' => $insert_csv1['unit'],
            'base_mrp' => $insert_csv1['base_mrp'],
            'base_price' => $insert_csv1['base_price'],
            'description' => $insert_csv1['description']
        );
        $inserted1 = DB::table('product_varient')->insertGetId($data1);


        $tags = explode(",", $row[9]);
        foreach ($tags as $tag) {
            DB::table('tags')
                ->insertGetId([
                    'product_id' => $inserted,
                    'tag' => $tag
                ]);
        }
    }
}
