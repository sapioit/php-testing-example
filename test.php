<?php


// function to test stuff
function test($function_name, $function_input, $desired_output){
    $function_call = 'return '.$function_name.'('.$function_input.');';
    $output = array();
    $function_output = eval($function_call);
    /* echo '<br/>['. $function_call. ']<br/>{' .$function_output. '}<br/>'; */
    if($function_output != $desired_output)
        echo '[X] Failed: '.$function_name.
             '<br/>| want: '.$desired_output.
             '<br/>| got : '.$function_output.
             '<br/>| input:<br/>'.$function_input;
    else
        echo '[O] Passed: '.$function_name.
             '<br/>| got: '.$desired_output.
             '<br/>| input: <br/>'.$function_input;
    echo '<br/><br/>';
}

echo '<pre>'; // formatting the output

/*************************************************************/


// the function we want to test
function division($to_divide,$divide_by){
    $rezultat=$to_divide / $divide_by;
    return $rezultat;
}

// the tests themselves
test('division', '3,1',3);       /* 3/1 = 3 */
test('division', '3,2','1.5');   /* 3/2 = 1.5 */
test('division', '3,0',null);    /* 3/0 = null */


/*************************************************************/


/* the function to test, after which we found a case in which it doesen't works
 * and we have repaired it. The tests remain unchanged. Not the function decides
 * what tests we write, but the tests decide what function we write, so the 
 * function decides the input data and output data we want/seek.
 */
function division2($to_divide,$divide_by){
    if($divide_by == 0)
        return null;
    $rezultat=$to_divide / $divide_by;
    return $rezultat;
}

// the tests themselves
test('division2', '3,1',3);       /* 3/1 = 3 */
test('division2', '3,2','1.5');   /* 3/2 = 1.5 */
test('division2', '3,0',null);    /* 3/0 = null */
test('division2', '3,0','null');  /* null != String(null) */


/*************************************************************/


function wierd_math($first, $second, $tird, $fourth){
    $result = division2($first, $second) + division2($tird, $fourth);
    return $result;
}

test('wierd_math','3,1,4,2',5);     /* 3/1 + 4/2 = 3 + 2 = 5 */
test('wierd_math','3,1,3,2',4.5);   /* 3/1 + 4/2 = 3 + 1.5 = 4.5 */
test('wierd_math','3,1,3,2','4.5'); /* just to be sure we did it right... */
test('wierd_math','3,1,4,0',null);  /* 3/1 + 4/0 = 3 + null = ...null? */


/*************************************************************/


function wierd_math2($first, $second, $tird, $fourth){
    if($second == 0 || $fourth == 0)
        return null;
    $result = division2($first, $second) + division($tird, $fourth);
    return $result;
}


test('wierd_math2','3,1,4,2',5);     /* 3/1 + 4/2 = 3 + 2 = 5 */
test('wierd_math2','3,1,3,2',4.5);   /* 3/1 + 4/2 = 3 + 1.5 = 4.5 */
test('wierd_math2','3,1,3,2','4.5'); /* just to be sure we did it right... */
test('wierd_math2','3,1,4,0',null);  /* 3/1 + 4/0 = 3 + null = ...null? */



echo '</pre>'; // formatting the output
