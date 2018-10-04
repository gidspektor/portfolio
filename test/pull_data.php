<?php


use PHPunit\Framework\Testcase;

require '../pull_data.php';



class StackTest extends TestCase
{
    public function testOutput_bio()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["bio" => "Also sarnies are life."];
        $case = output_bio($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testOutput_biofail()
    {
        $expected = 'false';
        $arrayResults = ["poop" => "Also sarnies are life."];
        $case = output_bio($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testOutput_life()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["life_now" => "Also sarnies are life."];
        $case = output_life($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testOutput_lifefail()
    {
        $expected = "false";
        $arrayResults = ["bio" => "Also sarnies are life."];
        $case = output_life($arrayResults);
        $this->assertEquals($case, $expected);
    }


    public function testOutput_goals()
    {
        $expected = "Also sarnies are life.";
        $arrayResults = ["goals" => "Also sarnies are life."];
        $case = output_goals($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testOutput_goalsfail()
    {
        $expected = "false";
        $arrayResults = ["life" => "Also sarnies are life."];
        $case = output_goals($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testnull_pull()
    {
        $expected = "false";
        $arrayResults = [];
        $case = null_pull($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testnull_pullfail()
    {
        $expected = ["life" => "Also sarnies are life."];
        $arrayResults = ["life" => "Also sarnies are life."];
        $case = null_pull($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testgrab_result()
    {
        $expected = '<div class="cards">
                    <div class="proj" style="background-image: url(\'three\');"><a href=www.two.com>one</a>
                    </div>one</div><div class="cards">
                    <div class="proj" style="background-image: url(\'six\');"><a href=www.five.com>four</a>
                    </div>four</div>';
        $arrayResults = [['project_name'=>'one', 'project_url'=>'www.two.com', 'image'=>'three'],['project_name'=>'four', 'project_url'=>'www.five.com', 'image'=>'six']];
        $case = grab_result($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testgrab_resultfail()
    {
        $expected = "error";
        $arrayResults = [["goals" => "Also sarnies are life."],["stuff" => "Also sarnies are life."]];
        $case = grab_result($arrayResults);
        $this->assertEquals($case, $expected);
    }

    public function testcheck_input()
    {
        $expected = '1';
        $entered_user_name = 'i like potatoes';
        $entered_password = 'i love potatoes';
        $correct_user = 'i like potatoes';
        $correct_pass = 'i love potatoes';
        $case = check_input($entered_user_name, $correct_user, $entered_password, $correct_pass);
        $this->assertEquals($case, $expected);
    }

    public function testcheck_inputfail()
    {
        $expected = '';
        $entered_user_name = 'i love potatoes';
        $entered_password = 'i like poo';
        $correct_user = 'i love potatoes';
        $correct_pass = 'i like potatoes';
        $case = check_input($entered_user_name, $correct_user, $entered_password, $correct_pass);
        $this->assertEquals($case, $expected);
    }
}