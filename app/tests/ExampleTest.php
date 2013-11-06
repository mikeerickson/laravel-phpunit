<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	// public function setUp()
	// {
	// 	echo ' * setup * ';
	// }
	// public function tearDown()
	// {
	// 	echo ' * td *';
	// }

	public function doAdd($x, $y)
	{
		return $x + $y;
	}

	public function testTrueAssertion()
	{
		$this->assertTrue('mike' === 'mike');
	}

	public function testPostCall()
	{
		$this->call('POST','customers');
		$this->assertRedirectedTo('/');
	}

	public function testCall()
	{
		$this->call('GET','/');
		$this->assertResponseOk();
	}

	public function testFalseAssertion()
	{
		$this->assertFalse('mike' === 'Mike');
	}

	public function testAdd()
	{
		$this->assertEquals(6,self::doAdd(3, 3));
	}

	public function testSub()
	{
		$this->assertEquals(6,9-3);
	}

	public function testMultiply()
	{
		$this->assertEquals(9,3*3);
	}


}