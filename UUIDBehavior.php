<?php
/**
 * Created by PhpStorm.
 * User: joels
 * Date: 27/3/17
 * Time: 6:53 PM
 */

namespace enigmatix\uuid;


use yii\base\Behavior;
use yii\behaviors\AttributeBehavior;
use yii\db\BaseActiveRecord;
use Ramsey\Uuid\Uuid;

class UUIDBehavior extends AttributeBehavior
{

    public $uuidAttribute = 'uuid';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_BEFORE_INSERT => [$this->uuidAttribute],
            ];
        }
    }

    /**
     * @inheritdoc*
     */
    protected function getValue($event)
    {
        if ($this->value === null) {
            return Uuid::uuid1();
        }
        return parent::getValue($event);
    }
}