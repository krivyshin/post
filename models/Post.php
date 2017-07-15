<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Post
 *
 * @author SmartBooks
 */
class Post extends ActiveRecord{
    public static function tableName() {
        return 'post';
    }
}
