<?php

namespace TelegramBot\Api\Test\Types\Inline;

use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class InlineKeyboardMarkupTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {
        $item = new InlineKeyboardMarkup([[['url' => 'http://test.com', 'text' => 'Link'], ['url' => 'http://test.com', 'text' => 'Link']]]);

        $this->assertAttributeEquals([[['url' => 'http://test.com', 'text' => 'Link'], ['url' => 'http://test.com', 'text' => 'Link']]], 'inlineKeyboard', $item);
    }

    public function testSetInlineKeyboard()
    {
        $item = new InlineKeyboardMarkup([[['url' => 'http://test.com', 'text' => 'Link'], ['url' => 'http://test.com', 'text' => 'Link']]]);
        $item->setInlineKeyboard([[['url' => 'http://test.com', 'text' => 'Link']]]);

        $this->assertAttributeEquals([[['url' => 'http://test.com', 'text' => 'Link']]], 'inlineKeyboard', $item);
    }

    public function testGetInlineKeyboard()
    {
        $item = new InlineKeyboardMarkup([[['url' => 'http://test.com', 'text' => 'Link'], ['url' => 'http://test.com', 'text' => 'Link']]]);
        $item->setInlineKeyboard([[['url' => 'http://test.com', 'text' => 'Link']]]);

        $this->assertEquals([[['url' => 'http://test.com', 'text' => 'Link']]], $item->getInlineKeyboard());
    }
}
