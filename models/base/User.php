<?php
namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;
use yii2tech\ar\softdelete\SoftDeleteBehavior;
use yii2mod\user\models\UserModel as BaseUserModel;

/**
 * This is the base model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property string $created_at
 * @property integer $updated_at
 * @property integer $last_login
 * @property string $uuid
 * @property string $name
 * @property string $last_name
 * @property string $phone_number
 * @property string $birthday
 * @property integer $is_active
 * @property integer $total_points
 * @property string $deleted_at
 * @property string $deleted_by
 *
 * @property \app\models\Competitors[] $competitors
 */
class User extends BaseUserModel
{

    use \mootensai\relation\RelationTrait;

    private $_rt_softdelete;
    private $_rt_softrestore;

    public function __construct()
    {
//        parent::__construct();
        $this->_rt_softdelete = [
            'deleted_by' => \Yii::$app->user->id,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
        $this->_rt_softrestore = [
            'deleted_by' => 0,
            'deleted_at' => date('Y-m-d H:i:s'),
        ];
    }

    /**
     * This function helps \mootensai\relation\RelationTrait runs faster
     * @return array relation names of this model
     */
    public function relationNames()
    {
        return [
            'competitors'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
            [['username', 'email'], 'required'],
            ['email', 'unique', 'message' => Yii::t('yii2mod.user', 'This email address has already been taken.')],
            ['username', 'unique', 'message' => Yii::t('yii2mod.user', 'This username has already been taken.')],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['plainPassword', 'string', 'min' => 6],
            ['plainPassword', 'required', 'on' => 'create'],
            ['status', 'default', 'value' => \yii2mod\user\models\enums\UserStatus::ACTIVE],
            ['status', 'in', 'range' => \yii2mod\user\models\enums\UserStatus::getConstantsByName()],
            [['status', 'last_login', 'is_active', 'total_points'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['uuid', 'name', 'last_name', 'phone_number'], 'string', 'max' => 45],
            [['created_at', 'updated_at', ], 'string'],
            [['password_reset_token'], 'unique'],
//            [['lock'], 'default', 'value' => '0'],
//            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     *
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock
     *
     */
    public function optimisticLock()
    {
        return 'lock';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'last_login' => Yii::t('app', 'Last Login'),
            'uuid' => Yii::t('app', 'Uuid'),
            'name' => Yii::t('app', 'Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'birthday' => Yii::t('app', 'Birthday'),
            'is_active' => Yii::t('app', 'Is Active'),
            'total_points' => Yii::t('app', 'Total Points'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompetitors()
    {
        return $this->hasMany(\app\models\Competitors::className(), ['user_id' => 'id'])->inverseOf('user');
    }

    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
//            'blameable' => [
//                'class' => BlameableBehavior::className(),
//                'createdByAttribute' => 'created_by',
//                'updatedByAttribute' => 'updated_by',
//            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'uuid',
            ],
            'softDeleteBehavior' => [
                'class' => SoftDeleteBehavior::className(),
                'softDeleteAttributeValues' => [
                    'isDeleted' => true
                ],
            ],
        ];
    }

    /**
     * The following code shows how to apply a default condition for all queries:
     *
     * ```php
     * class Customer extends ActiveRecord
     * {
     *     public static function find()
     *     {
     *         return parent::find()->where(['deleted' => false]);
     *     }
     * }
     *
     * // Use andWhere()/orWhere() to apply the default condition
     * // SELECT FROM customer WHERE `deleted`=:deleted AND age>30
     * $customers = Customer::find()->andWhere('age>30')->all();
     *
     * // Use where() to ignore the default condition
     * // SELECT FROM customer WHERE age>30
     * $customers = Customer::find()->where('age>30')->all();
     * ```
     */

    /**
     * @inheritdoc
     * @return \app\models\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \app\models\UserQuery(get_called_class());
        return $query->where([]);
    }
}
