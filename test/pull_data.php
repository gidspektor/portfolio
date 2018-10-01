<?php


use PHPunit\Framework\Testcase;

require '../pull_data.php';


class StackTest extends TestCase
{

    public function testOutput_bio()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["bio"=>"Also sarnies are life."];
        $case = output_bio($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testOutput_life()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["life_now"=>"Also sarnies are life."];
        $case = output_life($arrayResults);
        $this->assertEquals($case, $expected);
    }


    public function testOutput_goals()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["goals"=>"Also sarnies are life."];
        $case = output_goals($arrayResults);
        $this->assertEquals($case, $expected);
    }
}


