<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
         CREATE VIEW view_records AS
                SELECT
                    A.`id`,
                    A.ItemCode,
                    A.ItemName,
                    A.PurchasePrice,
                    A.SellingPrice,
                    SUM(IF(B.TransactionType ='In', B.Quantity, B.Quantity  * -1)) TotalQuantity
                FROM `item_masters` A
                 LEFT JOIN inventories B  on A.id = B.item_id
                group by
                    A.`id`,
                    A.ItemCode,
                    A.ItemName,
                    A.PurchasePrice,
                    A.SellingPrice;
        ");
    }

};
