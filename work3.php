<?php

abstract class Document {
    abstract public function save($doc);
}

class PDFDocument extends Document {
    public function save($doc) {
        echo "Сохранить {$doc} как PDF<br>";
    }
}

class WordDocument extends Document {
    public function save($doc) {
        echo "Сохранить {$doc} как WORD<br>";
    }
}

class ExcelDocument extends Document {
    public function save($doc) {
        echo "Сохранить {$doc} как EXCEL<br>";
    }
}

$pdf = new PDFDocument();
$word = new WordDocument();
$excel = new ExcelDocument();

$doc = 'nttek';
$pdf->save($doc);
$word->save($doc);
$excel->save($doc);