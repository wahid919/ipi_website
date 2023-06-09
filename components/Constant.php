<?php

namespace app\components;

use app\models\Setting;
use app\models\WebProfile;
use Yii;

class Constant
{
    const ROLE_SA = 1;
    const ROLE_SALES = 2;
    const ROLE_ADMIN_DEPO = 3;

    const COLOR = [
        "purple",
        "green",
        "red",
        "blue",
        "yellow",
        "orange",
        "maroon",
        "black",
    ];

    public static function generateRandomColor()
    {
        $colors = Constant::COLOR;
        $len = count($colors);
        $num = random_int(0, $len - 1);
        return $colors[$num];
    }

    public static function purifyPhone($phone)
    {
        if ($phone == "") {
            return null;
        }

        $remove_white_space = str_replace(" ", "", $phone);
        $filter_phone = str_replace("-", "", $remove_white_space);

        if (substr($filter_phone, 0, 2) === "08") {
            $phone = substr($filter_phone, 1);
            $phone = "62" . $phone;
        } else if (substr($filter_phone, 0, 2) === "+") {
            $phone = substr($filter_phone, 1);
        }

        return $phone;
    }

    private static function COLUMN_SWITCH_ROW($number)
    {
        switch ($number) {
            case 1:
                $row = 12;
                break;
            case 2:
                $row = 6;
                break;
            case 3:
                $row = 4;
                break;
            case 4:
                $row = 3;
                break;
            default:
                $row = 6;
                break;
        }
        return $row;
    }

    /**
     * Modify Field size
     * @param int $number number of column
     * @param boolean $withLabel Is Field rendering with label
     * @return array
     */
    public static function COLUMN($number = 2, $withLabel = true)
    {
        $row = self::COLUMN_SWITCH_ROW($number);

        if ($withLabel) {
            $template = '<div class="col-lg-12">
                        <div class="col-md-12">{label}</div>
                        <div class="col-md-12">{input}{error}</div>
                    </div>';
        } else {
            $template = '<div class="col-lg-12">
                        <div class="col-md-12">{input}{error}</div>
                    </div>';
        }

        return [
            'template' => $template,
            'labelOptions' => ['class' => "control-label"],
            'options' => ['class' => "col-md-{$row}", 'style' => 'padding:0px;'],
        ];
    }

    public static function generateRandomString($length = 32)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+-';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function flattenError($errors)
    {
        $flatten = [];

        foreach ($errors as $errorAttr) :
            foreach ($errorAttr as $error) :
                $flatten[] = "$error";
            endforeach;
        endforeach;

        if ($flatten == []) {
            return null;
        }

        return $flatten[0];
    }

    public static function uuid($suffix, $lenght = 13)
    {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new \Exception("no cryptographically secure random function available");
        }
        return $suffix . substr(bin2hex($bytes), 0, $lenght);
    }

    public static function isMethod($method)
    {
        if (gettype($method) == "array") {
            foreach ($method as $_m) {
                if (Yii::$app->request->method == strtoupper($_m)) {
                    return true;
                }
            }
        } else {
            if (Yii::$app->request->method == strtoupper($method)) {
                return true;
            }
        }
        return false;
    }


    public static function setting($attribute)
    {
        $model = Setting::findOne(['id' => 3]);
        if ($model == null) return null;
        return $model->$attribute;
    }

    public static function getPaginationSummary($pagination, $count)
    {
        if ($count == 0) return "Menampilkan $count dari total $count data ";
        $start = $pagination->offset + 1;
        $end = ($count < $pagination->limit) ? $count : $pagination->offset + $pagination->limit;
        $end = ($end > $count) ? $count : $end;
        return "Menampilkan $start-$end dari total $count data ";
    }
}
