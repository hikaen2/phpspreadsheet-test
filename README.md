# phpspreadsheet-test


## Result

in.xlsx:

|     | A                                     | B                            |
|----:|---------------------------------------|------------------------------|
|   1 | =COUNTA(INDIRECT("A2:A" & ROWS(A:A))) | <- count from A2 to end of A |


PhpSpreadsheet throws Exception:

```
$ composer install
$ php run.php 
PHP Fatal error:  Uncaught PhpOffice\PhpSpreadsheet\Calculation\Exception: Sheet1!A1 -> Invalid range: "A2:A1" in /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Cell.php:390
Stack trace:
#0 /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Worksheet.php(1213): PhpOffice\PhpSpreadsheet\Cell\Cell->getCalculatedValue()
#1 /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Worksheet.php(1282): PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet->writeCellFormula()
#2 /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Worksheet.php(1134): PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet->writeCell()
#3 /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Worksheet.php(71): PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet->writeSheetData()
#4 /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php(394): PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet->writeWorksheet()
#5 /home/taro/src/test/phpspreadsheet-test/run.php(8): PhpOffice\PhpSpreadsheet\Writer\Xlsx->save()
#6 {main}
  thrown in /home/taro/src/test/phpspreadsheet-test/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Cell.php on line 390
```


## Expected Result

PhpSpreadsheet does not throw Exception.
