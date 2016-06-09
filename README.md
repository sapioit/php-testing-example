# Primitive Testing Example in PHP


## Output
```js
[O] Passed: 	division
| obtained: 	3
| input:     	3,1

[O] Passed: 	division
| obtained: 	1.5
| input:     	3,2



Warning:  Division by zero in X:\__Programming\WEB\!UwAmp\www\_test\ad-exchange\sql\_testing.php on line 38

[X] Failed: 	division
| wanted:     	null
| obtained : 	INF
| input:     	3,0

[O] Passed: 	division2
| obtained: 	3
| input:     	3,1

[O] Passed: 	division2
| obtained: 	1.5
| input:     	3,2

[O] Passed: 	division2
| obtained: 	null
| input:     	3,0

[X] Failed: 	division2
| wanted:     	null
| obtained : 	null
| input:     	3,0

[O] Passed: 	wierd_math
| obtained: 	5
| input:     	3,1,4,2

[O] Passed: 	wierd_math
| obtained: 	4.5
| input:     	3,1,3,2

[O] Passed: 	wierd_math
| obtained: 	4.5
| input:     	3,1,3,2

[X] Failed: 	wierd_math
| wanted: 	null
| obtained : 	3
| input:     	3,1,4,0

[O] Passed: 	wierd_math2
| obtained: 	5
| input:     	3,1,4,2

[O] Passed: 	wierd_math2
| obtained: 	4.5
| input:     	3,1,3,2

[O] Passed: 	wierd_math2
| obtained: 	4.5
| input:     	3,1,3,2

[O] Passed: 	wierd_math2
| obtained: 	null
| input:     	3,1,4,0
```
