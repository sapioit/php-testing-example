<?php


// function to test stuff
function test($function_name, $function_input, $desired_output){
    $function_call = 'return '.$function_name.'('.$function_input.');';
    $output = array();
    $function_output = eval($function_call);
    /* echo '<br/>['. $function_call. ']<br/>{' .$function_output. '}<br/>'; */
    $desired_output_ = ($desired_output == null)
        ? '`null`' : $desired_output;
    $function_output_ = ($function_output == null)
        ? '`null`' : $function_output;
    $function_input_ = ($function_input == null)
        ? '`null`' : $function_input;
    // finished debug variables cleaning
    if($function_output != $desired_output) {
        echo '[X] Failed: &#9;'.$function_name.
             '<br/>| wanted: &#9;'.$desired_output_.
             '<br/>| obtained : &#9;'.$function_output_.
             '<br/>| input: &#9;'.$function_input_;
    } else {
        echo '[O] Passed: &#9;'.$function_name.
             '<br/>| obtained: &#9;'.$desired_output_.
             '<br/>| input: &#9;'.$function_input_;
    }
    echo '<br/><br/><br/>';
}

echo '<style>pre, code {
    font-family: "Lucida Console", Consolas;font-size:13px;
    </style><pre><code class="html">'; // formatting the output

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


echo '</code></pre>'; // formatting the output
