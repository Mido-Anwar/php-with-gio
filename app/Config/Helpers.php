<?php

 function  loadCSS($path) {
echo '<link rel="stylesheet" href="/resources/' . $path . '">';
}

// دالة لإدراج ملفات JavaScript
function loadJS($path) {
    echo '<script src="/resources/' . $path . '"></script>';
}