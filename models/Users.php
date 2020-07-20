<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $username
 * @property string|null $password
 * @property int|null $auth_type
 * @property int $is_delete
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Messages[] $messages
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_delete'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'is_delete' => 'Is Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Messages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['user_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds by access token
     * @param mixed $token
     * @param null $type
     * @return array|bool|\yii\db\ActiveRecord|IdentityInterface|null
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = Users::find()
            ->where(['auth_key' => $token])
            ->one();

        if ($user) {
            return $user;
        } else {
            return false;
        }    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_type;
    }

    /**
     * Validates auth key
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Finds by username
     * @param $username
     * @return array|bool|\yii\db\ActiveRecord
     */
    public static function findByUsername($username) {
        $user = Users::find()
            ->where(['username' => $username])
            ->one();

        if ($user) {
            return $user;
        } else {
            return false;
        }
    }

    /**
     * Validates password
     * @param $password
     * @return bool
     */
    public function validatePassword($password) {
        return Yii::$app->getSecurity()
            ->validatePassword($password, $this->password);
    }
    /**
     * Get user by user id.
     * @return array|Users $carrier.
     */
    public static function getAllUsers() {
        return $users = Users::find()
            ->all();
    }

    /**
     * Get user by user id.
     * @param integer $id user id.
     * @return array|Users $carrier.
     */
    public static function getOnUserArray($id) {
        return $users = Users::find()
            ->andWhere(['id' => $id])
            ->all();
    }
}
