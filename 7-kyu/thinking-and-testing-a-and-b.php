INSTRUCTIONS
No Story
No Description
Only by Thinking and Testing
Look at result of testcase, guess the code!

Sample Tests:

class MysteryFunctionTest extends TestCase
{
    public function testMysteryFunction() {
        //a+b?
        $this->assertSame(1,testit(0,1), "test a=0, b=1");
        $this->assertSame(3,testit(1,2), "test a=1, b=2");
        $this->assertSame(30, testit(10,20), "test a=10, b=20");
        //a*b?
        $this->assertSame(1,testit(1,1), "test a=1, b=1");
        $this->assertSame(3, testit(1,3), "test a=1, b=3");
        //try "Attempt" find more...
    }
}

SOLUTIONS
<?php
function testit($a,$b)
{
  return $a | $b;
}

// function testit($a,$b)
// {
//   return $a + $b - ($a & $b);
// }