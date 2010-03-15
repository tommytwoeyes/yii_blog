<?php

class Lookup extends CActiveRecord
{
	/**
	 * The followings are the available columns in table '{{lookup}}':
	 * @var integer $id
	 * @var string $name
	 * @var string $code
	 * @var string $type
	 * @var integer $position
	 */

   private static $_items = array();

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

  public static function item($type, $code)
  {
    if (!isset(self::$_items[$type]))
      self::loadItems($type);
    return isset(self::$_items[$type][$code]) ? self::$_items[$type][$code]: false;
  }

  public static function items($type)
  {
    if (!isset(self::$_items[$type]))
      self::loadItems($type);
    return self::$_items[$type];
  }

  private static function loadItems($type)
  {
    self::$_items[$type] = array();
    $models = self::model()->findAll(array(
      'condition'=>'type=:type',
      'params'=>array(':type'=>$type),
      'order'=>'position',
    ));
    foreach ($models as $model)
    {
      self::$_items[$type][$model->code] = $model->name;
    }
  }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{lookup}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, code, type, position', 'required'),
			array('position', 'numerical', 'integerOnly'=>true),
			array('name, code, type', 'length', 'max'=>128),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => 'Name',
			'code' => 'Code',
			'type' => 'Type',
			'position' => 'Position',
		);
	}
}