<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 * Test class for CRM_Event_BAO_ParticipantStatus BAO
 *
 * @package   CiviCRM
 * @group headless
 */
class CRM_Event_BAO_ParticipantStatusTest extends CiviUnitTestCase {

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
  }

  /**
   *  create() and deleteParticipantStatusType() method
   */
  public function testCreateAndDelete() {

    // create using required params
    $params = [
      'name' => 'testStatus',
      'label' => 'testParticipant',
      'class' => 'Positive',
      'weight' => 13,
      'visibility_id' => 1,
    ];

    $statusType = CRM_Event_BAO_ParticipantStatusType::create($params);
    // Checking for participant status type id in db.
    $statusTypeId = $this->assertDBNotNull('CRM_Event_DAO_ParticipantStatusType', $statusType->id, 'id',
      'id', 'Check DB for status type id'
    );

    CRM_Event_BAO_ParticipantStatusType::deleteParticipantStatusType($statusType->id);
    // Checking for participant status type id after delete.
    $statusTypeId = $this->assertDBNull('CRM_Event_DAO_ParticipantStatusType', $statusType->id, 'id',
      'id', 'Check DB for status type id'
    );
  }

  /**
   *  add() method (add and edit modes of participant status type)
   */
  public function testAddStatusType() {

    $params = [
      'name' => 'testStatus',
      'label' => 'testParticipant',
      'class' => 'Positive',
      'is_active' => 1,
      'is_counted' => 1,
      'weight' => 13,
      'visibility_id' => 1,
    ];

    // check for add participant status type
    $statusType = CRM_Event_BAO_ParticipantStatusType::add($params);
    foreach ($params as $param => $value) {
      $this->assertEquals($value, $statusType->$param);
    }

    $params = [
      'id' => $statusType->id,
      'name' => 'testStatus',
      'label' => 'testAlterParticipant',
      'class' => 'Pending',
      'is_active' => 0,
      'is_counted' => 0,
      'weight' => 14,
      'visibility_id' => 2,
    ];

    // check for add participant status type
    $statusType = CRM_Event_BAO_ParticipantStatusType::add($params);
    foreach ($params as $param => $value) {
      $this->assertEquals($value, $statusType->$param);
    }
  }

  /**
   * Retrieve() method of participant status type
   */
  public function testRetrieveStatusType() {

    $params = [
      'name' => 'testStatus',
      'label' => 'testParticipant',
      'class' => 'Positive',
      'is_active' => 1,
      'is_counted' => 1,
      'weight' => 13,
      'visibility_id' => 1,
    ];

    $statusType = CRM_Event_BAO_ParticipantStatusType::create($params);

    // retrieve status type
    $retrieveParams = ['id' => $statusType->id];
    $default = [];
    $retrieveStatusType = CRM_Event_BAO_ParticipantStatusType::retrieve($retrieveParams, $default);

    // check on retrieve values
    foreach ($params as $param => $value) {
      $this->assertEquals($value, $retrieveStatusType->$param);
    }
  }

  /**
   * SetIsActive() method of participant status type
   */
  public function testSetIsActiveStatusType() {

    $params = [
      'name' => 'testStatus',
      'label' => 'testParticipant',
      'class' => 'Positive',
      'is_active' => 0,
      'is_counted' => 1,
      'weight' => 15,
      'visibility_id' => 1,
    ];

    $statusType = CRM_Event_BAO_ParticipantStatusType::create($params);
    $isActive = 1;

    // set participant status type active
    CRM_Event_BAO_ParticipantStatusType::setIsActive($statusType->id, $isActive);

    // compare expected value in db
    $this->assertDBCompareValue('CRM_Event_DAO_ParticipantStatusType', $statusType->id, 'is_Active',
      'id', $isActive, 'Check DB for is_Active value'
    );
  }

}
