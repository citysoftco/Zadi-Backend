<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\Calculation\TextData\Trim;
use PhpParser\Node\Stmt\Break_;

/**
 * Class HelperService.
 */
class HelperService
{

    public static function removeFirstChars($charToRemove, $string)
    {
        $newStr = "";
        $found = false;
        for ($i = 0; $i < strlen($string); $i++) {
            # code...
            if ($string[$i] != $charToRemove || $found) {
                $newStr .= $string[$i];
                $found = true;
            }
        }
        return $newStr;
    }
}
