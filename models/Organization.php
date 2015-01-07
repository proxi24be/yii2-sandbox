<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $id
 * @property integer $organization_type_id
 * @property string $value
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_type_id'], 'integer'],
            [['value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organization_type_id' => 'Organization Type ID',
            'value' => 'Value',
        ];
    }
}
