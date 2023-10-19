<?php
//membuat class WordCount
class WordCount
{
    //membuat method countWord untuk menghitung berapa banyak kata pada kalimat yang akan dihitung
    //mempunyai satu parameter untuk menghitung kalimatnya
    public function countWords($setence)
    {
        //menggunakan method count  untuk menghitung jumlah elemen dalam sebuah array. Berikut adalah contoh penggunaan metode
        //method explode berfungsi untuk memecah string menjadi beberapa bagian (elemen) berdasarkan suatu pemisah (delimiter) tertentu. Hasilnya adalah array yang berisi bagian-bagian string yang dipisahkan.
        //kemudian mengembalikan angka banyak nya kalimat yang ada di parameter
        return count(explode(" ", $setence));
    }
}