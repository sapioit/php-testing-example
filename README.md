# Primitive Testing Example in PHP


## Output
```js
[O] Passed: division
| got: 3
| input: 
3,1

[O] Passed: division
| got: 1.5
| input: 
3,2



Warning:  Division by zero in localhost\_testing.php on line 29

[X] Failed: division
| want: 
| got : INF
| input:
3,0

[O] Passed: division2
| got: 3
| input: 
3,1

[O] Passed: division2
| got: 1.5
| input: 
3,2

[O] Passed: division2
| got: 
| input: 
3,0

[X] Failed: division2
| want: null
| got : 
| input:
3,0

[O] Passed: wierd_math
| got: 5
| input: 
3,1,4,2

[O] Passed: wierd_math
| got: 4.5
| input: 
3,1,3,2

[O] Passed: wierd_math
| got: 4.5
| input: 
3,1,3,2

[X] Failed: wierd_math
| want: 
| got : 3
| input:
3,1,4,0

[O] Passed: wierd_math2
| got: 5
| input: 
3,1,4,2

[O] Passed: wierd_math2
| got: 4.5
| input: 
3,1,3,2

[O] Passed: wierd_math2
| got: 4.5
| input: 
3,1,3,2

[O] Passed: wierd_math2
| got: 
| input: 
3,1,4,0
```
