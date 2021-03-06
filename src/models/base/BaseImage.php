<?php

namespace models\base;



/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property integer $advert_id
 * @property string $type
 * @property integer $width
 * @property integer $height
 * @property string $name
 * @property string $filename
 * @property string $created
 *
 * @property \models\Advert $advert
 * @property \models\ImageLink[] $imageLinks
 * @property \models\ImageLink[] $imageLinks0
 */
class BaseImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[BaseImagePeer::ADVERT_ID, BaseImagePeer::WIDTH, BaseImagePeer::HEIGHT, BaseImagePeer::FILENAME], 'required'],
            [[BaseImagePeer::ADVERT_ID, BaseImagePeer::WIDTH, BaseImagePeer::HEIGHT], 'integer'],
            [[BaseImagePeer::TYPE], 'string'],
            [[BaseImagePeer::CREATED], 'safe'],
            [[BaseImagePeer::NAME, BaseImagePeer::FILENAME], 'string', 'max' => 128],
            [[BaseImagePeer::ADVERT_ID], 'exist', 'skipOnError' => true, 'targetClass' => BaseAdvert::className(), 'targetAttribute' => [BaseImagePeer::ADVERT_ID => BaseAdvertPeer::ID]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            BaseImagePeer::ID => 'ID',
            BaseImagePeer::ADVERT_ID => 'Advert ID',
            BaseImagePeer::TYPE => 'Type',
            BaseImagePeer::WIDTH => 'Width',
            BaseImagePeer::HEIGHT => 'Height',
            BaseImagePeer::NAME => 'Name',
            BaseImagePeer::FILENAME => 'Filename',
            BaseImagePeer::CREATED => 'Created',
        ];
    }
    /**
     * @return \models\AdvertQuery
     */
    public function getAdvert() {
        return $this->hasOne(\models\Advert::className(), [BaseAdvertPeer::ID => BaseImagePeer::ADVERT_ID]);
    }
        /**
     * @return \models\ImageLinkQuery
     */
    public function getImageLinks() {
        return $this->hasMany(\models\ImageLink::className(), [BaseImageLinkPeer::FROM_IMAGE_ID => BaseImagePeer::ID]);
    }
        /**
     * @return \models\ImageLinkQuery
     */
    public function getImageLinks0() {
        return $this->hasMany(\models\ImageLink::className(), [BaseImageLinkPeer::TO_IMAGE_ID => BaseImagePeer::ID]);
    }
    
    /**
     * @inheritdoc
     * @return \models\ImageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \models\ImageQuery(get_called_class());
    }
}
