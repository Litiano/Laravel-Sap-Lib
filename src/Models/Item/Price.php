<?php
/**
 * Created by PhpStorm.
 * User: H4
 * Date: 07/10/2018
 * Time: 23:35
 */

namespace Litiano\Sap\Models\Item;


use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $connection = 'sap';
    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'ITM1';
    protected $primaryKey = false;

    /**
     * @param mixed $itemCode
     * @param int $priceList
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|Model|Model[]|mixed|null
     */
    public function find($itemCode, $priceList = 1, $columns = ['*'])
    {
        return $this->where('ItemCode', '=', $itemCode)
            ->where('PriceList', '=', $priceList)
            ->first($columns);
    }
}