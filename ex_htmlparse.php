<?php
    // Example: htmlparse
    // Converts HTML to formatted ASCII text.
    // Run with: php < ex_html2text.php

    include ("htmlparser.inc");

    $htmlText = file_get_contents('./temp.html');
    header('Content-Type: text/plain;charset=utf-8');

    $htmlToText = new HtmlParser ($htmlText);
    while($htmlToText->parse()) {
        //echo $htmlToText->iNodeType;
        echo $htmlToText->iNodeName,"\r\n";
        echo $htmlToText->iNodeValue, "\r\n";
        print_r($htmlToText->iNodeAttributes);
        echo '--------------------------------------------------------------------', "\r\n";
    }
    exit;
    $text = $htmlToText->find('li');
    echo "Conversion follows:\r\n";
    echo "-------------------\r\n";
    echo $text;

    //END