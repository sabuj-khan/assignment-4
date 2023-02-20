<?php

function countryNameSorting( $countryName ) {
    usort( $countryName, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $countryName;
}

$countries = array( "Bangladesh", "Germany", "Australia", "Canada", "UK", "Qatar", "Singapore", "USA" );
$ourResult = countryNameSorting( $countries );
print_r( $ourResult );
