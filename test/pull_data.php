<?php


use PHPunit\Framework\Testcase;

require '../pull_data.php';


class StackTest extends TestCase
{


    public function testchoose_data()
    {
        $arrayResults = [

            ["content"=>"Also sarnies are life."]
        ];

        $expected = 'Also sarnies are life.';

        $case = choose_data($arrayResults);

        $this->assertEquals($case, $expected);

    }
}