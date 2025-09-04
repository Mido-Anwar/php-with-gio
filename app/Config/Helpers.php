<?php
// دالة لإدراج ملفات CSS
 function  loadCSS($path_and_fileName) {
echo '<link rel="stylesheet" href="/resources/' . $path_and_fileName . '">';
}

// دالة لإدراج ملفات JavaScript
function loadJS($path_and_fileName) {
    echo '<script src="/resources/' . $path_and_fileName . '"></script>';
}