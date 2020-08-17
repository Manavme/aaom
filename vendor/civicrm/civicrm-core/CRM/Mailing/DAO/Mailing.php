<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/Mailing.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:bfcc85d4eb2bab05f214dd946e5fdef6)
 */

/**
 * Database access object for the Mailing entity.
 */
class CRM_Mailing_DAO_Mailing extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-envelope-o';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int
   */
  public $id;

  /**
   * Which site is this mailing for
   *
   * @var int
   */
  public $domain_id;

  /**
   * FK to the header component.
   *
   * @var int
   */
  public $header_id;

  /**
   * FK to the footer component.
   *
   * @var int
   */
  public $footer_id;

  /**
   * FK to the auto-responder component.
   *
   * @var int
   */
  public $reply_id;

  /**
   * FK to the unsubscribe component.
   *
   * @var int
   */
  public $unsubscribe_id;

  /**
   * @var int
   */
  public $resubscribe_id;

  /**
   * FK to the opt-out component.
   *
   * @var int
   */
  public $optout_id;

  /**
   * Mailing Name.
   *
   * @var string
   */
  public $name;

  /**
   * differentiate between standalone mailings, A/B tests, and A/B final-winner
   *
   * @var string
   */
  public $mailing_type;

  /**
   * From Header of mailing
   *
   * @var string
   */
  public $from_name;

  /**
   * From Email of mailing
   *
   * @var string
   */
  public $from_email;

  /**
   * Reply-To Email of mailing
   *
   * @var string
   */
  public $replyto_email;

  /**
   * The language/processing system used for email templates.
   *
   * @var string
   */
  public $template_type;

  /**
   * Advanced options used by the email templating system. (JSON encoded)
   *
   * @var longtext
   */
  public $template_options;

  /**
   * Subject of mailing
   *
   * @var string
   */
  public $subject;

  /**
   * Body of the mailing in text format.
   *
   * @var longtext
   */
  public $body_text;

  /**
   * Body of the mailing in html format.
   *
   * @var longtext
   */
  public $body_html;

  /**
   * Should we track URL click-throughs for this mailing?
   *
   * @var bool
   */
  public $url_tracking;

  /**
   * Should we forward replies back to the author?
   *
   * @var bool
   */
  public $forward_replies;

  /**
   * Should we enable the auto-responder?
   *
   * @var bool
   */
  public $auto_responder;

  /**
   * Should we track when recipients open/read this mailing?
   *
   * @var bool
   */
  public $open_tracking;

  /**
   * Has at least one job associated with this mailing finished?
   *
   * @var bool
   */
  public $is_completed;

  /**
   * FK to the message template.
   *
   * @var int
   */
  public $msg_template_id;

  /**
   * Overwrite the VERP address in Reply-To
   *
   * @var bool
   */
  public $override_verp;

  /**
   * FK to Contact ID who first created this mailing
   *
   * @var int
   */
  public $created_id;

  /**
   * Date and time this mailing was created.
   *
   * @var timestamp
   */
  public $created_date;

  /**
   * When the mailing (or closely related entity) was created or modified or deleted.
   *
   * @var timestamp
   */
  public $modified_date;

  /**
   * FK to Contact ID who scheduled this mailing
   *
   * @var int
   */
  public $scheduled_id;

  /**
   * Date and time this mailing was scheduled.
   *
   * @var timestamp
   */
  public $scheduled_date;

  /**
   * FK to Contact ID who approved this mailing
   *
   * @var int
   */
  public $approver_id;

  /**
   * Date and time this mailing was approved.
   *
   * @var timestamp
   */
  public $approval_date;

  /**
   * The status of this mailing. Values: none, approved, rejected
   *
   * @var int
   */
  public $approval_status_id;

  /**
   * Note behind the decision.
   *
   * @var longtext
   */
  public $approval_note;

  /**
   * Is this mailing archived?
   *
   * @var bool
   */
  public $is_archived;

  /**
   * In what context(s) is the mailing contents visible (online viewing)
   *
   * @var string
   */
  public $visibility;

  /**
   * The campaign for which this mailing has been initiated.
   *
   * @var int
   */
  public $campaign_id;

  /**
   * Remove duplicate emails?
   *
   * @var bool
   */
  public $dedupe_email;

  /**
   * @var int
   */
  public $sms_provider_id;

  /**
   * Key for validating requests related to this mailing.
   *
   * @var string
   */
  public $hash;

  /**
   * With email_selection_method, determines which email address to use
   *
   * @var int
   */
  public $location_type_id;

  /**
   * With location_type_id, determine how to choose the email address to use.
   *
   * @var string
   */
  public $email_selection_method;

  /**
   * Language of the content of the mailing. Useful for tokens.
   *
   * @var string
   */
  public $language;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Mailings');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'header_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'footer_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'reply_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'unsubscribe_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'optout_id', 'civicrm_mailing_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'msg_template_id', 'civicrm_msg_template', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'scheduled_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'approver_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'campaign_id', 'civicrm_campaign', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'sms_provider_id', 'civicrm_sms_provider', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'location_type_id', 'civicrm_location_type', 'id');
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
          'title' => ts('Mailing ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing.id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Domain'),
          'description' => ts('Which site is this mailing for'),
          'where' => 'civicrm_mailing.domain_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '3.4',
        ],
        'header_id' => [
          'name' => 'header_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Header'),
          'description' => ts('FK to the header component.'),
          'where' => 'civicrm_mailing.header_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingComponent',
          'pseudoconstant' => [
            'table' => 'civicrm_mailing_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
            'condition' => 'component_type = "Header"',
          ],
          'add' => NULL,
        ],
        'footer_id' => [
          'name' => 'footer_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Footer'),
          'description' => ts('FK to the footer component.'),
          'where' => 'civicrm_mailing.footer_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingComponent',
          'pseudoconstant' => [
            'table' => 'civicrm_mailing_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
            'condition' => 'component_type = "Footer"',
          ],
          'add' => NULL,
        ],
        'reply_id' => [
          'name' => 'reply_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Reply'),
          'description' => ts('FK to the auto-responder component.'),
          'where' => 'civicrm_mailing.reply_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingComponent',
          'add' => NULL,
        ],
        'unsubscribe_id' => [
          'name' => 'unsubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Unsubscribe'),
          'description' => ts('FK to the unsubscribe component.'),
          'where' => 'civicrm_mailing.unsubscribe_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingComponent',
          'add' => NULL,
        ],
        'resubscribe_id' => [
          'name' => 'resubscribe_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Resubscribe'),
          'where' => 'civicrm_mailing.resubscribe_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'optout_id' => [
          'name' => 'optout_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Opt Out'),
          'description' => ts('FK to the opt-out component.'),
          'where' => 'civicrm_mailing.optout_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_MailingComponent',
          'add' => NULL,
        ],
        'mailing_name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Name'),
          'description' => ts('Mailing Name.'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing.name',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'mailing_type' => [
          'name' => 'mailing_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Type'),
          'description' => ts('differentiate between standalone mailings, A/B tests, and A/B final-winner'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailing.mailing_type',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Mailing_PseudoConstant::mailingTypes',
          ],
          'add' => '4.6',
        ],
        'from_name' => [
          'name' => 'from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Name'),
          'description' => ts('From Header of mailing'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing.from_name',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'from_email' => [
          'name' => 'from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing From Email'),
          'description' => ts('From Email of mailing'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing.from_email',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'replyto_email' => [
          'name' => 'replyto_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Replyto Email'),
          'description' => ts('Reply-To Email of mailing'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing.replyto_email',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'template_type' => [
          'name' => 'template_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Template Type'),
          'description' => ts('The language/processing system used for email templates.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_mailing.template_type',
          'default' => 'traditional',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Mailing_BAO_Mailing::getTemplateTypeNames',
          ],
          'add' => NULL,
        ],
        'template_options' => [
          'name' => 'template_options',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Template Options (JSON)'),
          'description' => ts('Advanced options used by the email templating system. (JSON encoded)'),
          'where' => 'civicrm_mailing.template_options',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'subject' => [
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Subject'),
          'description' => ts('Subject of mailing'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing.subject',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'body_text' => [
          'name' => 'body_text',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Text'),
          'description' => ts('Body of the mailing in text format.'),
          'where' => 'civicrm_mailing.body_text',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'body_html' => [
          'name' => 'body_html',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Body Html'),
          'description' => ts('Body of the mailing in html format.'),
          'where' => 'civicrm_mailing.body_html',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'url_tracking' => [
          'name' => 'url_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Url Tracking'),
          'description' => ts('Should we track URL click-throughs for this mailing?'),
          'where' => 'civicrm_mailing.url_tracking',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => NULL,
        ],
        'forward_replies' => [
          'name' => 'forward_replies',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Forward Replies'),
          'description' => ts('Should we forward replies back to the author?'),
          'where' => 'civicrm_mailing.forward_replies',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => NULL,
        ],
        'auto_responder' => [
          'name' => 'auto_responder',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto Responder'),
          'description' => ts('Should we enable the auto-responder?'),
          'where' => 'civicrm_mailing.auto_responder',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => NULL,
        ],
        'open_tracking' => [
          'name' => 'open_tracking',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Track Mailing?'),
          'description' => ts('Should we track when recipients open/read this mailing?'),
          'where' => 'civicrm_mailing.open_tracking',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => NULL,
        ],
        'is_completed' => [
          'name' => 'is_completed',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mailing Completed'),
          'description' => ts('Has at least one job associated with this mailing finished?'),
          'where' => 'civicrm_mailing.is_completed',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => NULL,
        ],
        'msg_template_id' => [
          'name' => 'msg_template_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Message Template'),
          'description' => ts('FK to the message template.'),
          'where' => 'civicrm_mailing.msg_template_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_MessageTemplate',
          'add' => NULL,
        ],
        'override_verp' => [
          'name' => 'override_verp',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Override Verp'),
          'description' => ts('Overwrite the VERP address in Reply-To'),
          'where' => 'civicrm_mailing.override_verp',
          'default' => '0',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '2.2',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Creator'),
          'description' => ts('FK to Contact ID who first created this mailing'),
          'where' => 'civicrm_mailing.created_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Mailing Created Date'),
          'description' => ts('Date and time this mailing was created.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing.created_date',
          'default' => 'NULL',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '3.0',
        ],
        'mailing_modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Modified Date'),
          'description' => ts('When the mailing (or closely related entity) was created or modified or deleted.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing.modified_date',
          'export' => TRUE,
          'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'scheduled_id' => [
          'name' => 'scheduled_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Scheduled By'),
          'description' => ts('FK to Contact ID who scheduled this mailing'),
          'where' => 'civicrm_mailing.scheduled_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'scheduled_date' => [
          'name' => 'scheduled_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Mailing Scheduled Date'),
          'description' => ts('Date and time this mailing was scheduled.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing.scheduled_date',
          'default' => 'NULL',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '3.3',
        ],
        'approver_id' => [
          'name' => 'approver_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approved By'),
          'description' => ts('FK to Contact ID who approved this mailing'),
          'where' => 'civicrm_mailing.approver_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'approval_date' => [
          'name' => 'approval_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Mailing Approved Date'),
          'description' => ts('Date and time this mailing was approved.'),
          'required' => FALSE,
          'where' => 'civicrm_mailing.approval_date',
          'default' => 'NULL',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '3.3',
        ],
        'approval_status_id' => [
          'name' => 'approval_status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Approval Status'),
          'description' => ts('The status of this mailing. Values: none, approved, rejected'),
          'where' => 'civicrm_mailing.approval_status_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'mail_approval_status',
            'optionEditPath' => 'civicrm/admin/options/mail_approval_status',
          ],
          'add' => '3.3',
        ],
        'approval_note' => [
          'name' => 'approval_note',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Approval Note'),
          'description' => ts('Note behind the decision.'),
          'where' => 'civicrm_mailing.approval_note',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '3.3',
        ],
        'is_archived' => [
          'name' => 'is_archived',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Mailing Archived?'),
          'description' => ts('Is this mailing archived?'),
          'where' => 'civicrm_mailing.is_archived',
          'default' => '0',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '2.2',
        ],
        'visibility' => [
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Visibility'),
          'description' => ts('In what context(s) is the mailing contents visible (online viewing)'),
          'maxlength' => 40,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_mailing.visibility',
          'default' => 'Public Pages',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::groupVisibility',
          ],
          'add' => '3.3',
        ],
        'campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Campaign'),
          'description' => ts('The campaign for which this mailing has been initiated.'),
          'where' => 'civicrm_mailing.campaign_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '3.4',
        ],
        'dedupe_email' => [
          'name' => 'dedupe_email',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('No Duplicate emails?'),
          'description' => ts('Remove duplicate emails?'),
          'where' => 'civicrm_mailing.dedupe_email',
          'default' => '0',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '4.1',
        ],
        'sms_provider_id' => [
          'name' => 'sms_provider_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing SMS Provider'),
          'where' => 'civicrm_mailing.sms_provider_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_SMS_DAO_Provider',
          'html' => [
            'type' => 'Select',
          ],
          'add' => '4.2',
        ],
        'hash' => [
          'name' => 'hash',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Hash'),
          'description' => ts('Key for validating requests related to this mailing.'),
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'where' => 'civicrm_mailing.hash',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'add' => '4.5',
        ],
        'location_type_id' => [
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Type'),
          'description' => ts('With email_selection_method, determines which email address to use'),
          'where' => 'civicrm_mailing.location_type_id',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_LocationType',
          'pseudoconstant' => [
            'table' => 'civicrm_location_type',
            'keyColumn' => 'id',
            'labelColumn' => 'display_name',
          ],
          'add' => '4.6',
        ],
        'email_selection_method' => [
          'name' => 'email_selection_method',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Email Selection Method'),
          'description' => ts('With location_type_id, determine how to choose the email address to use.'),
          'maxlength' => 20,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailing.email_selection_method',
          'default' => 'automatic',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::emailSelectMethods',
          ],
          'add' => '4.6',
        ],
        'language' => [
          'name' => 'language',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailing Language'),
          'description' => ts('Language of the content of the mailing. Useful for tokens.'),
          'maxlength' => 5,
          'size' => CRM_Utils_Type::SIX,
          'where' => 'civicrm_mailing.language',
          'table_name' => 'civicrm_mailing',
          'entity' => 'Mailing',
          'bao' => 'CRM_Mailing_BAO_Mailing',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'languages',
            'keyColumn' => 'name',
            'optionEditPath' => 'civicrm/admin/options/languages',
          ],
          'add' => '4.6',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing', $prefix, []);
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
      'index_hash' => [
        'name' => 'index_hash',
        'field' => [
          0 => 'hash',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_mailing::0::hash',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
