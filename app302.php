<?php 
    $year = 2015;
    switch ($year) {
        case $year >= 2010 && $year <= 2024:
            print"Generation Alpha";
            break;
        case $year >= 1995 && $year <= 2009:
            print"Generation Z";
            break;
        case $year >= 1950 && $year <= 1994:
            print"Generation Y";
            break;
        case $year >= 1965 && $year <= 1979:
            print"Generation X";
            break;
        case $year >= 1946 && $year <= 1964:
            print"Generation Baby Boomer";
            break;
        case $year >= 1923 && $year <= 1945:
            print"Generation Buildr";
            break;          
        default:
            print "ERROR";
            break;
    }