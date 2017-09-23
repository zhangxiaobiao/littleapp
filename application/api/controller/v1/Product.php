<?php
/**
 * Created by 张世彪.
 * Date: 2017/9/23 23:02
 */

namespace app\api\controller\v1;


use app\api\validate\CountValidate;
use app\api\model\Product as ProductModel;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count=15)
    {
        (new CountValidate())->goCheck();
        $products =ProductModel::getMostRecent($count);
        if ($products->isEmpty()){
            throw new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }
}