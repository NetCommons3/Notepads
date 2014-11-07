<?php
/**
 * NotepadsController Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NotepadsController', 'Notepads.Controller');

/**
 * NotepadsController Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package app.Plugin.Notepads.Test.Controller.Case
 */
class NotepadsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'site_setting',
		'plugin.pages.page',
		'plugin.notepads.notepad',
		'plugin.notepads.frame',
		'plugin.notepads.frames_language',
		'plugin.notepads.box',
		'plugin.notepads.block',
		'plugin.notepads.plugin',
		'plugin.notepads.parts_rooms_user',
		'plugin.notepads.room',
		'plugin.notepads.user',
		'plugin.notepads.room_part',
		'plugin.notepads.language',
	);

/**
 * setUp
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown method
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * test index
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return void
 */
	public function testIndex() {
		$this->assertTrue(true);
	}

/**
 * test view
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @return void
 */
	public function testView() {
		$this->assertTrue(true);
	}

}
