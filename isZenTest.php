<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-03-30 at 14:27:37.
 */
class isZenTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var isZen
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new isZen;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert ('文字列です。') === true.
     *
     * @covers isZen::is_zen_strlen
     */
    public function testIs_zen_strlen()
    {
        $this->assertSame(
          true,
          $this->object->is_zen_strlen('文字列です。')
        );
    }

    /**
     * Generated from @assert ('abcd1234+:;!') === false.
     *
     * @covers isZen::is_zen_strlen
     */
    public function testIs_zen_strlen2()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_strlen('abcd1234+:;!')
        );
    }

    /**
     * Generated from @assert ('全角abcd') === false.
     *
     * @covers isZen::is_zen_strlen
     */
    public function testIs_zen_strlen3()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_strlen('全角abcd')
        );
    }

    /**
     * Generated from @assert ('半角ｶﾅ') === false.
     *
     * @covers isZen::is_zen_strlen
     */
    public function testIs_zen_strlen4()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_strlen('半角ｶﾅ')
        );
    }

    /**
     * Generated from @assert ('文字列です。') === true.
     *
     * @covers isZen::is_zen_preg_match
     */
    public function testIs_zen_preg_match()
    {
        $this->assertSame(
          true,
          $this->object->is_zen_preg_match('文字列です。')
        );
    }

    /**
     * Generated from @assert ('abcd1234+:;!') === false.
     *
     * @covers isZen::is_zen_preg_match
     */
    public function testIs_zen_preg_match2()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_preg_match('abcd1234+:;!')
        );
    }

    /**
     * Generated from @assert ('全角abcd') === false.
     *
     * @covers isZen::is_zen_preg_match
     */
    public function testIs_zen_preg_match3()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_preg_match('全角abcd')
        );
    }

    /**
     * Generated from @assert ('半角ｶﾅ') === false.
     *
     * @covers isZen::is_zen_preg_match
     */
    public function testIs_zen_preg_match4()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_preg_match('半角ｶﾅ')
        );
    }

    /**
     * Generated from @assert ('文字列です。') === true.
     *
     * @covers isZen::is_zen_mb_substr_encoding
     */
    public function testIs_zen_mb_substr_encoding()
    {
        $this->assertSame(
          true,
          $this->object->is_zen_mb_substr_encoding('文字列です。')
        );
    }

    /**
     * Generated from @assert ('abcd1234+:;!') === false.
     *
     * @covers isZen::is_zen_mb_substr_encoding
     */
    public function testIs_zen_mb_substr_encoding2()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_mb_substr_encoding('abcd1234+:;!')
        );
    }

    /**
     * Generated from @assert ('全角abcd') === false.
     *
     * @covers isZen::is_zen_mb_substr_encoding
     */
    public function testIs_zen_mb_substr_encoding3()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_mb_substr_encoding('全角abcd')
        );
    }

    /**
     * Generated from @assert ('半角ｶﾅ') === false.
     *
     * @covers isZen::is_zen_mb_substr_encoding
     */
    public function testIs_zen_mb_substr_encoding4()
    {
        $this->assertSame(
          false,
          $this->object->is_zen_mb_substr_encoding('半角ｶﾅ')
        );
    }

    /**
     * @covers isZen::is_hankaku
     * @todo   Implement testIs_hankaku().
     */
    public function testIs_hankaku()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
