<?php

// check all group check box
function isChecked( $inputName, $value ) {

    if ( isset( $_REQUEST[$inputName] ) && is_array( $_REQUEST[$inputName] ) && in_array( $value, $_REQUEST[$inputName] ) ) {
        echo " checked";
    }

}

// check Fruits group check box
function isFruitChecked( $value ) {

    if ( isset( $_REQUEST['fruits'] ) && is_array( $_REQUEST['fruits'] ) && in_array( $value, $_REQUEST['fruits'] ) ) {
        echo " checked";
    }

}

function displayOptions( $options, $selectedValus ) {

    foreach ( $options as $option ) {
        // $option = strtolower( $option ); // Banana banana
        $selected = '';

        if ( in_array( strtolower( $option ), $selectedValus ) ) {
            $selected = 'selected';
        }

        printf( "<option value='%s' %s>%s</option> \n", strtolower( $option ), $selected, ucwords( $option ) );
    }

}
