<?php

/**
 * Class CRM_Core_CodeGen_FreshnessTest
 * @group headless
 *
 * Ensure that any files which are autogenerated AND which are
 * committed to git are ALSO up-to-date.
 */
class CRM_Core_CodeGen_FreshnessTest extends CiviUnitTestCase {

  public function testDAOs() {
    $tasks = $this->findTasks('CRM_Core_CodeGen_DAO');
    $names = [];
    foreach ($tasks as $task) {
      /** @var CRM_Core_CodeGen_DAO $task */
      $names[] = $task->name;
      $this->assertFalse($task->needsUpdate(), "Expect DAO for {$task->name} is up-to-date");
    }

    // Pick some example to ensure the loop ran with real values.
    $this->assertTrue(in_array('civicrm_contact', $names),
      'Expect the list of tables to include civicrm_contact');
  }

  public function testReflection() {
    $tasks = $this->findTasks('CRM_Core_CodeGen_Reflection');
    $this->assertEquals(1, count($tasks), 'Expect to find one Reflection task');
    foreach ($tasks as $task) {
      $this->assertFalse($task->needsUpdate(), "Expect AllCoreTables to be up-to-date");
    }
  }

  /**
   * Get a list of GenCode tasks, filtered by type.
   *
   * @param string $clazz
   * @return array<CRM_Core_CodeGen_ITask>
   */
  protected function findTasks($clazz) {
    $genCode = $this->createCodeGen();
    $tasks = $genCode->getTasks();
    $matches = [];
    foreach ($tasks as $task) {
      if ($task instanceof $clazz) {
        $matches[] = $task;
      }
    }
    return $matches;
  }

  /**
   * @return \CRM_Core_CodeGen_Main
   */
  protected function createCodeGen() {
    $path = rtrim($GLOBALS['civicrm_root'], '/');

    $genCode = new CRM_Core_CodeGen_Main(
      // $CoreDAOCodePath
      $path . '/CRM/Core/DAO/',
      // $sqlCodePath
      $path . '/sql/',
      // $phpCodePath
      $path . '/',
      // $tplCodePath
      $path . '/templates/',
      // IGNORE,
      NULL,
      // cms
      CIVICRM_UF,
      // db version
      NULL,
      // schema file
      $path . '/xml/schema/Schema.xml',
      // path to digest file
      NULL
    );
    return $genCode;
  }

}
