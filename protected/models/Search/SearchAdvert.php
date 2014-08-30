<?php
/**
 * Created by PhpStorm.
 * User: ZyManch
 * Date: 28.06.14
 * Time: 21:50
 */
class SearchAdvert extends Advert {

    public $space_total_from;
    public $space_total_to;
    public $space_living_from;
    public $space_living_to;
    public $space_cookroom_from;
    public $space_cookroom_to;
    public $floor_from;
    public $floor_to;
    public $floor_max_from;
    public $floor_max_to;
    public $price_from;
    public $price_to;
    public $complex;
    public $steel_door;
    public $phone;
    public $balcony;

    public function __construct($scenario = 'search') {
        parent::__construct('search');
    }

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('space_total_from, space_total_to', 'numerical', 'integerOnly'=>true),
            array('space_living_from, space_living_to', 'numerical', 'integerOnly'=>true),
            array('space_cookroom_from, space_cookroom_to', 'numerical', 'integerOnly'=>true),
            array('space_cookroom_from, space_cookroom_to', 'numerical', 'integerOnly'=>true),
            array('floor_from,floor_to', 'numerical', 'integerOnly'=>true),
            array('floor_max_from,floor_max_to', 'numerical', 'integerOnly'=>true),
            array('price_from,price_to', 'numerical', 'integerOnly'=>true),
            array('complex', 'length','max' => 12),
            array('balcony,steel_door,phone', 'length','max' => 3),
            array('type', 'length','max' => 12),
        );
    }

    public function search($count = 60) {
        $criteria=new CDbCriteria;
        $criteria->with = array('address');
        $criteria->compare('t.type',$this->type);
        if ($this->balcony) {
            $criteria->addCondition('t.balcony > 0');
        }
        if ($this->steel_door) {
            $criteria->addCondition('t.steel_door="yes"');
        }
        if ($this->phone) {
            $criteria->addCondition('t.phone="yes"');
        }
        $attributes = array(
            'floor','floor_max','space_total','space_living',
            'space_cookroom','floor','floor_max','price'
        );
        if ($this->complex) {
            $complex = explode(',',$this->complex);
            $criteria->addInCondition('address.complex',$complex);
        }
        foreach ($attributes as $attribute) {
            $attributeFrom = $attribute.'_from';
            $attributeTo = $attribute.'_to';
            if ($this->$attributeFrom) {
                $criteria->addCondition(sprintf('t.%s >=:%s',$attribute, $attributeFrom));
                $criteria->params[':'.$attributeFrom] = $this->$attributeFrom;
            }
            if ($this->$attributeTo) {
                $criteria->addCondition(sprintf('t.%s <=:%s',$attribute, $attributeTo));
                $criteria->params[':'.$attributeTo] = $this->$attributeTo;
            }
        }
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination' => array('pageSize' => $count)
        ));
    }

}