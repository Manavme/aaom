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
 * Test class for CRM_PCP_BAO_PCPTest BAO
 *
 * @package   CiviCRM
 * @group headless
 */
class CRM_PCP_BAO_PCPTest extends CiviUnitTestCase {

  use CRMTraits_PCP_PCPTestTrait;

  /**
   * Clean up after test.
   *
   * @throws \CRM_Core_Exception
   */
  public function tearDown() {
    $this->quickCleanUpFinancialEntities();
    parent::tearDown();
  }

  public function testAddPCPBlock() {

    $params = $this->pcpBlockParams();
    $pcpBlock = CRM_PCP_BAO_PCPBlock::create($params);

    $this->assertInstanceOf('CRM_PCP_DAO_PCPBlock', $pcpBlock, 'Check for created object');
    $this->assertEquals($params['entity_table'], $pcpBlock->entity_table, 'Check for entity table.');
    $this->assertEquals($params['entity_id'], $pcpBlock->entity_id, 'Check for entity id.');
    $this->assertEquals($params['supporter_profile_id'], $pcpBlock->supporter_profile_id, 'Check for profile id .');
    $this->assertEquals($params['is_approval_needed'], $pcpBlock->is_approval_needed, 'Check for approval needed .');
    $this->assertEquals($params['is_tellfriend_enabled'], $pcpBlock->is_tellfriend_enabled, 'Check for tell friend on.');
    $this->assertEquals($params['tellfriend_limit'], $pcpBlock->tellfriend_limit, 'Check for tell friend limit .');
    $this->assertEquals($params['link_text'], $pcpBlock->link_text, 'Check for link text.');
    $this->assertEquals($params['is_active'], $pcpBlock->is_active, 'Check for is_active.');
  }

  public function testAddPCP() {
    $blockParams = $this->pcpBlockParams();
    $pcpBlock = CRM_PCP_BAO_PCPBlock::create($blockParams);

    $params = $this->pcpParams();
    $params['pcp_block_id'] = $pcpBlock->id;

    $pcp = CRM_PCP_BAO_PCP::create($params);

    $this->assertInstanceOf('CRM_PCP_DAO_PCP', $pcp, 'Check for created object');
    $this->assertEquals($params['contact_id'], $pcp->contact_id, 'Check for entity table.');
    $this->assertEquals($params['status_id'], $pcp->status_id, 'Check for status.');
    $this->assertEquals($params['title'], $pcp->title, 'Check for title.');
    $this->assertEquals($params['intro_text'], $pcp->intro_text, 'Check for intro_text.');
    $this->assertEquals($params['page_text'], $pcp->page_text, 'Check for page_text.');
    $this->assertEquals($params['donate_link_text'], $pcp->donate_link_text, 'Check for donate_link_text.');
    $this->assertEquals($params['is_thermometer'], $pcp->is_thermometer, 'Check for is_thermometer.');
    $this->assertEquals($params['is_honor_roll'], $pcp->is_honor_roll, 'Check for is_honor_roll.');
    $this->assertEquals($params['goal_amount'], $pcp->goal_amount, 'Check for goal_amount.');
    $this->assertEquals($params['is_active'], $pcp->is_active, 'Check for is_active.');
  }

  public function testAddPCPNoStatus() {
    $blockParams = $this->pcpBlockParams();
    $pcpBlock = CRM_PCP_BAO_PCPBlock::create($blockParams);

    $params = $this->pcpParams();
    $params['pcp_block_id'] = $pcpBlock->id;
    unset($params['status_id']);

    $pcp = CRM_PCP_BAO_PCP::create($params);

    $this->assertInstanceOf('CRM_PCP_DAO_PCP', $pcp, 'Check for created object');
    $this->assertEquals($params['contact_id'], $pcp->contact_id, 'Check for entity table.');
    $this->assertEquals(0, $pcp->status_id, 'Check for zero status when no status_id passed.');
    $this->assertEquals($params['title'], $pcp->title, 'Check for title.');
    $this->assertEquals($params['intro_text'], $pcp->intro_text, 'Check for intro_text.');
    $this->assertEquals($params['page_text'], $pcp->page_text, 'Check for page_text.');
    $this->assertEquals($params['donate_link_text'], $pcp->donate_link_text, 'Check for donate_link_text.');
    $this->assertEquals($params['is_thermometer'], $pcp->is_thermometer, 'Check for is_thermometer.');
    $this->assertEquals($params['is_honor_roll'], $pcp->is_honor_roll, 'Check for is_honor_roll.');
    $this->assertEquals($params['goal_amount'], $pcp->goal_amount, 'Check for goal_amount.');
    $this->assertEquals($params['is_active'], $pcp->is_active, 'Check for is_active.');
  }

  public function testDeletePCP() {

    $pcp = CRM_Core_DAO::createTestObject('CRM_PCP_DAO_PCP');
    $pcpId = $pcp->id;
    CRM_PCP_BAO_PCP::deleteById($pcpId);
    $this->assertDBRowNotExist('CRM_PCP_DAO_PCP', $pcpId, 'Database check PCP deleted successfully.');
  }

  /**
   * Get getPCPDashboard info function.
   *
   * @throws \CRM_Core_Exception
   */
  public function testGetPcpDashboardInfo() {
    $block = CRM_PCP_BAO_PCPBlock::create($this->pcpBlockParams());
    $contactID = $this->individualCreate();
    $contributionPage = $this->callAPISuccessGetSingle('ContributionPage', []);
    $this->callAPISuccess('Pcp', 'create', ['contact_id' => $contactID, 'title' => 'pcp', 'page_id' => $contributionPage['id'], 'pcp_block_id' => $block->id, 'is_active' => TRUE, 'status_id' => 'Approved']);
    $this->assertEquals([
      [],
      [
        [
          'pageTitle' => $contributionPage['title'],
          'action' => '<span><a href="/index.php?q=civicrm/pcp/info&amp;action=update&amp;reset=1&amp;id=' . $contributionPage['id'] . '&amp;component=contribute" class="action-item crm-hover-button" title=\'Configure\' >Edit Your Page</a><a href="/index.php?q=civicrm/friend&amp;eid=1&amp;blockId=1&amp;reset=1&amp;pcomponent=pcp&amp;component=contribute" class="action-item crm-hover-button" title=\'Tell Friends\' >Tell Friends</a></span><span class=\'btn-slide crm-hover-button\'>more<ul class=\'panel\'><li><a href="/index.php?q=civicrm/pcp/info&amp;reset=1&amp;id=1&amp;component=contribute" class="action-item crm-hover-button" title=\'URL for this Page\' >URL for this Page</a></li><li><a href="/index.php?q=civicrm/pcp/info&amp;action=browse&amp;reset=1&amp;id=1&amp;component=contribute" class="action-item crm-hover-button" title=\'Update Contact Information\' >Update Contact Information</a></li><li><a href="/index.php?q=civicrm/pcp&amp;action=disable&amp;reset=1&amp;id=1&amp;component=contribute" class="action-item crm-hover-button" title=\'Disable\' >Disable</a></li><li><a href="/index.php?q=civicrm/pcp&amp;action=delete&amp;reset=1&amp;id=1&amp;component=contribute" class="action-item crm-hover-button small-popup" title=\'Delete\' onclick = "return confirm(\'Are you sure you want to delete this Personal Campaign Page?\nThis action cannot be undone.\');">Delete</a></li></ul></span>',
          'pcpId' => 1,
          'pcpTitle' => 'pcp',
          'pcpStatus' => 'Approved',
          'class' => '',
        ],
      ],
    ], CRM_PCP_BAO_PCP::getPcpDashboardInfo($contactID));
  }

}