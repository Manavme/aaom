<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Discount.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b240911ddcf71cc294fe02614887711c)
 */

/**
 * Database access object for the Discount entity.
 */
class CRM_Core_DAO_Discount extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_discount';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * primary key
   *
   * @var int
   */
  public $id;

  /**
   * physical tablename for entity being joined to discount, e.g. civicrm_event
   *
   * @var string
   */
  public $entity_table;

  /**
   * FK to entity table specified in entity_table column.
   *
   * @var int
   */
  public $entity_id;

  /**
   * FK to civicrm_price_set
   *
   * @var int
   */
  public $price_set_id;

  /**
   * Date when discount starts.
   *
   * @var date
   */
  public $start_date;

  /**
   * Date when discount ends.
   *
   * @var date
   */
  public $end_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_discount';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Discounts');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'price_set_id', 'civicrm_price_set', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Discount ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'where' => 'civicrm_discount.id',
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('physical tablename for entity being joined to discount, e.g. civicrm_event'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_discount.entity_table',
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('FK to entity table specified in entity_table column.'),
          'required' => TRUE,
          'where' => 'civicrm_discount.entity_id',
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'participant_discount_name' => [
          'name' => 'price_set_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Discount Name'),
          'description' => ts('FK to civicrm_price_set'),
          'required' => TRUE,
          'where' => 'civicrm_discount.price_set_id',
          'export' => TRUE,
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'FKClassName' => 'CRM_Price_DAO_PriceSet',
          'pseudoconstant' => [
            'table' => 'civicrm_price_set',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '4.3',
        ],
        'start_date' => [
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Discount Start Date'),
          'description' => ts('Date when discount starts.'),
          'where' => 'civicrm_discount.start_date',
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'end_date' => [
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Discount End Date'),
          'description' => ts('Date when discount ends.'),
          'where' => 'civicrm_discount.end_date',
          'table_name' => 'civicrm_discount',
          'entity' => 'Discount',
          'bao' => 'CRM_Core_BAO_Discount',
          'localizable' => 0,
          'add' => '2.1',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'discount', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'discount', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_discount::0::entity_table::entity_id',
      ],
      'index_entity_option_id' => [
        'name' => 'index_entity_option_id',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
          2 => 'price_set_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_discount::0::entity_table::entity_id::price_set_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
