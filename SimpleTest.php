<?php
//mengimport class TestCase
use PHPUnit\Framework\TestCase;
//mengimport file WordCount.php
require_once "WordCount.php";
//mengextends class TestCase supaya method yang ada di class TestCase bisa digunakan
class SimpleTest extends TestCase
{
    //membuat function testCountWord untuk mengetes apakah apakah banyak kata nya sudah sesuai
    public function testCountWord()
    {
        //menjadikan object ke dalam variabel $wc
        $wc = new WordCount();
        //membuat kalimat kemudian dimasukan testSetence
        $testSetence = "My name is zarif";
        //kemudian memanggil function countWord isi dengan parameter variabel testSetence
        //untuk menghitung berapa banyak kalimat pada variabel testSetence
        $wordCount = $wc->countWords($testSetence);
        //memanggil method assertEquals pada class TestCase dengan cara menggunakan $this 
        //kemudian assertEquals memiliki 2 parameter.
        // parameter ini untuk mengecek apakah parameter 1 dan 2 sama atau tidak
        //jika sama maka akan memunculkan output OK
        //jika tidak sama akan memunculkan output FAILURES
        $this->assertEquals(4, $wordCount);
    }

}