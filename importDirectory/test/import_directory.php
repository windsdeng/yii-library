<?php

class ImportDirectoryTest extends PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
        Yii::importDirectory('application.models');
    }

    public function testImport()
    {
        $this->assertTrue(class_exists('TestModel', true));
        $this->assertTrue(class_exists('TestTagModel', true));
    }
}