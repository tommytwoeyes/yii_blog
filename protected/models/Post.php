<?php

class Post extends CActiveRecord
{
	/**
	 * The followings are the available columns in table '{{post}}':
	 * @var integer $id
	 * @var string $title
	 * @var string $content
	 * @var string $tags
	 * @var integer $status
	 * @var integer $create_time
	 * @var integer $update_time
	 * @var integer $author_id
	 */

   const STATUS_DRAFT     = 1;
   const STATUS_PUBLISHED = 2;
   const STATUS_ARCHIVED  = 3;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

  protected function beforeSave()
  {
    ir (parent::beforeSave())
    {
      if ($this->isNewRecord)
      {
        $this->create_time = $this->update_time = time();
        $this->author_id = Yii::app()->user->id;
      }
      else
      {
        $this->update_time = time();
      }
      return true;
    }
    else
    {
      return false;
    }
  }

  protected function afterSave()
  {
    parent::afterSave();
    Tag::model()->updateFrequency($this->_oldTags, $this->tags);
  }

  private $_oldTags;

  protected function afterFind()
  {
    parent::afterFind();
    $this->_oldTags = $this->tags;
  }

  public function getUrl()
  {
    return Yii::app()->createUrl('post/view', array(
      'id' => $this->id,
      'title' => $this->title,
    ));
  }

  public function normalizeTags($attribute, $params)
  {
    $this->tags = Tag::array2string(array_unique(Tag::string2array($this->tags)));
  }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{post}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, status', 'required'),
      array('title', 'length', 'max'=>128),
			array('status', 'in', 'range'=>array(1,2,3)),
			array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/',
        'message'=>'Tags can contain words separated by a comma follwed by a space.'),
			array('tags', 'normalizeTags'),
      array('title, status', 'safe', 'on'=>'search'),
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
      'author' => array(self::BELONGS_TO, 'User', 'author_id'),
      'comments' => array(self::HAS_MANY, 'Comment', 'post_id',
        // 'condition'=>'comments.status='. Comment::STATUS_APPROVED,
        'order'=>'comments.create_time DESC'),
      'commentCount' => array(self::STAT, 'Comment', 'post_id',
         //'condition'=>'status='. Comment::STATUS_APPROVED,
      )
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'title' => 'Title',
			'content' => 'Content',
			'tags' => 'Tags',
			'status' => 'Status',
			'create_time' => 'Created',
			'update_time' => 'Updated',
			'author_id' => 'Author',
		);
	}
}