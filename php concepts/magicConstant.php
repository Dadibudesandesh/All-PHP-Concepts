<?php

// '__LINE__'

    // It is a print, The current line number of the file
    // echo "This is a '__LINE__' magic constant : ".__LINE__;

// '__FILE__'

    //It is print, The full path and filename of the file. If used inside an include, the name of the included file is returned. Since PHP 4.0.2, __FILE__ always contains an absolute path with symlinks resolved whereas in older versions it contained relative path under some circumstances
    // echo "This is a '__FILE__' magic constant : ".__FILE__;

// '__DIR__'

    // It is display,The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory. 
    // echo "This is a '__DIR__' magic constant : ".__DIR__;

// '__FUNCTION__'

    // IT is a dispaly,The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
    // function myFunction(){
    //     echo "Tis is a '__FUNCTION__' magic consatn : ".__FUNCTION__;
    // }
    // myFunction();

// '__CLASS__'

    //The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the class name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
    class myClass{
        public 
            function getClass(){
                return __CLASS__;
            }
    }
    $classObject=new myClass();
    echo "This is a '__CLASS__' magic constant : ".$classObject->getClass;






?>