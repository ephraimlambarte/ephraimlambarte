EphraimLambarte
======

**This project is for generating a pdf file of Ephraim's resume**

-It only runs on php.
 
## Requirements

 * PHP version 5.4.0 or higher
 * Dompdf library
 * xampp
 
### Install with git

From the command line, switch to the directory(inside htdocs folder of xampp) where dompdf and this project will reside and run
the following commands:

```sh
git clone https://github.com/dompdf/dompdf.git
cd dompdf

git clone https://github.com/PhenX/php-font-lib.git lib/php-font-lib
cd lib/php-font-lib
git checkout 0.5.1
cd ..

git clone https://github.com/PhenX/php-svg-lib.git php-svg-lib
cd php-svg-lib
git checkout v0.3
```
Run xampp and start apache server and run the project using any browser.
  