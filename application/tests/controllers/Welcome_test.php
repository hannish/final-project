<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
  public function test_index()
    {
	$this->request('GET', '/welcome');
	$this->assertResponseCode(200);
    }
  public function test_index_1()
    {
        $this->request('GET', '/Hello/dispdata');
        $this->assertResponseCode(200);
    }	
 
}
