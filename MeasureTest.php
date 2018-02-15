<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use domain\Measure;
include '../inc/autoload.inc.php';

class MeasureTest extends TestCase {
    
    public function testMeasure() {
        
        $measure = new Measure(NULL, 10, 15); 
        
        $this->assertEquals(NULL, $measure->id);
        $this->assertEquals("10", $measure->temperature);
        $this->assertEquals("15", $measure->humidite);
        
    }
}
