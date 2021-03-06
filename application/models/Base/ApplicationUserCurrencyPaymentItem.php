<?php
/**
 * 自動生成ファイル
 *
 * CreateDataModelLogicで自動生成されたファイル
 *
 * @category Zend
 * @package Application_Model_Base
 * @subpackage Base
 */


/**
 * アプリケーションユーザ通貨ペイメントアイテム
 *
 *
 *
 * @category Zend
 * @package Application_Model_Base
 * @subpackage Base
 */
class Application_Model_Base_ApplicationUserCurrencyPaymentItem
{

    const CLASS_NAME = 'Application_Model_Base_ApplicationUserCurrencyPaymentItem';

    /**
     * @var float アプリケーションユーザペイメントアイテムID PK:bigint_unsigned
     */
    protected $_applicationUserPaymentItemId = null;

    /**
     * @var string アプリケーション通貨ID PK:varchar(255)
     */
    protected $_applicationCurrencyId = null;

    /**
     * @var integer 通貨額 int_unsigned
     */
    protected $_currencyAmount = null;

    /**
     * @var string 作成日時 datetime
     */
    protected $_createdDate = null;

    /**
     * @var string 更新日時 datetime
     */
    protected $_updatedDate = null;

    /**
     * @var string 削除日時 datetime
     */
    protected $_deletedDate = null;

    /**
     * 自動生成コンストラクタ
     *
     * @param mixed モデルデータ
     */
    public function __construct($options = null)
    {
        if (is_array($options) || is_object($options)) {
             $this->setOptions($options);
         }
    }

    /**
     * モデルのプロパティにデータをセットする
     *
     * @param mixed モデルデータ
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem このクラスのオブジェクト
     */
    public function setOptions($options)
    {
        $methods = get_class_methods($this);
        
        // 連想配列か、通常の配列化かを判定
        if (is_array($options) && array_values($options) === $options && !empty($options))
        {
            // 通常の配列の場合、連想配列に組み替える
            $tmpArray = array();
            $indexNumber = 0;
        
            foreach ($methods as $methodName)
            {
                // setOptions以外の頭にsetのつくメソッド
                if(preg_match("/^set/", $methodName) && strcmp($methodName, 'setOptions') !== 0)
                {
                    $tmpArray[lcfirst(preg_replace("/^set/", '', $methodName))] = $options[$indexNumber];
                    $indexNumber++;
                }
            }
            $options = $tmpArray;
        }
        
        foreach ($options as $key => $value) 
        {
            // 正規表現でスネークケース方式から、キャメルケース方式に名前を変換
            $method = 'set' . ucfirst(preg_replace_callback('/_(.)/', function($m) {return strtoupper($m[1]);}, $key));
            if (in_array($method, $methods)) 
            {
                $this->$method($value);
            }
        }
        return $this;
    }

    /**
     * applicationUserPaymentItemIdプロパティーを設定する。
     *
     * @param float $applicationUserPaymentItemId applicationUserPaymentItemIdの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setApplicationUserPaymentItemId($applicationUserPaymentItemId)
    {
        $this->_applicationUserPaymentItemId = $applicationUserPaymentItemId; 
        return $this;
    }

    /**
     * applicationUserPaymentItemIdプロパティーを返す。
     *
     * @return float applicationUserPaymentItemIdの値
     */
    public function getApplicationUserPaymentItemId()
    {
        return $this->_applicationUserPaymentItemId;
    }

    /**
     * applicationCurrencyIdプロパティーを設定する。
     *
     * @param string $applicationCurrencyId applicationCurrencyIdの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setApplicationCurrencyId($applicationCurrencyId)
    {
        $this->_applicationCurrencyId = $applicationCurrencyId; 
        return $this;
    }

    /**
     * applicationCurrencyIdプロパティーを返す。
     *
     * @return string applicationCurrencyIdの値
     */
    public function getApplicationCurrencyId()
    {
        return $this->_applicationCurrencyId;
    }

    /**
     * currencyAmountプロパティーを設定する。
     *
     * @param float $currencyAmount currencyAmountの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setCurrencyAmount($currencyAmount)
    {
        $this->_currencyAmount = $currencyAmount; 
        return $this;
    }

    /**
     * currencyAmountプロパティーを返す。
     *
     * @return float currencyAmountの値
     */
    public function getCurrencyAmount()
    {
        return $this->_currencyAmount;
    }

    /**
     * createdDateプロパティーを設定する。
     *
     * @param string $createdDate createdDateの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setCreatedDate($createdDate)
    {
        $this->_createdDate = $createdDate; 
        return $this;
    }

    /**
     * createdDateプロパティーを返す。
     *
     * @return string createdDateの値
     */
    public function getCreatedDate()
    {
        return $this->_createdDate;
    }

    /**
     * updatedDateプロパティーを設定する。
     *
     * @param string $updatedDate updatedDateの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->_updatedDate = $updatedDate; 
        return $this;
    }

    /**
     * updatedDateプロパティーを返す。
     *
     * @return string updatedDateの値
     */
    public function getUpdatedDate()
    {
        return $this->_updatedDate;
    }

    /**
     * deletedDateプロパティーを設定する。
     *
     * @param string $deletedDate deletedDateの値
     * @return Application_Model_Base_ApplicationUserCurrencyPaymentItem Application_Model_Base_ApplicationUserCurrencyPaymentItemのオブジェクト
     */
    public function setDeletedDate($deletedDate)
    {
        $this->_deletedDate = $deletedDate; 
        return $this;
    }

    /**
     * deletedDateプロパティーを返す。
     *
     * @return string deletedDateの値
     */
    public function getDeletedDate()
    {
        return $this->_deletedDate;
    }

    /**
     * モデルオブジェクトを連想配列にして返す。
     *
     * @return array モデルオブジェクトの連想配列
     */
    public function toArray()
    {
        $memberArray = array();
        $memberArray['applicationUserPaymentItemId'] = $this->getApplicationUserPaymentItemId();
        $memberArray['applicationCurrencyId'] = $this->getApplicationCurrencyId();
        $memberArray['currencyAmount'] = $this->getCurrencyAmount();
        $memberArray['createdDate'] = $this->getCreatedDate();
        $memberArray['updatedDate'] = $this->getUpdatedDate();
        $memberArray['deletedDate'] = $this->getDeletedDate();
        return $memberArray;
    }


}

