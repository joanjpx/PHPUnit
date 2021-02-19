<?php
require(__DIR__.'/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use App\Model;

class ModelTest extends TestCase
{
    public function test_insertOne()
    {
        $model = new Model();
        
        $this->assertIsBool($model->insertOne(['user','message'],['joanjpx','Hola Mundo desde Class Model']));
        $this->assertTrue($model->insertOne(['user','message'],['joanjpx','Hola Mundo desde Class Model']));
    }

    public function test_selectAll()
    {
        $model = new Model();
        
        $this->assertIsArray($model->selectAll(['user','message']));
    }
}