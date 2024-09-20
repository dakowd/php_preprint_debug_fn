# php preprint
Dakowd's Noob & Simple Debug Function for quick fix tool.

Add this to your PHP helper so you can call the function anywhere from your project.

$term = any data or value, can be null, integer, array, object, etc.
$halt = true/false or 1/0 - useful to halt the process, by default we set to false so that code after executing this will still continue, but if you want to halt, just pass a value true/1.

## Use cases:

Let's define some variables first to be used in the sample below:
```
$array = ['a'=>1, 'b'=> 2, 'c'=>d];
$object = (object)['a'=>1, 'b'=> 2, 'c'=>d];
$empty_array = [];
$empty_string = '';
$null = null;
$bool_false = false;
$bool_true = true;
```

### Sample 1:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint('hello world!');
echo 'You have reached the end of line';
```
```
> This is a sample code for demonstrating this debug tool
> hello world!
> You have reached the end of line
```

### Sample 2:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint('hello world!', true);
echo 'You should not see this end of line because you used preprint with halt=true';
```
```
> This is a sample code for demonstrating this debug tool
> hello world!
```

### Sample 3:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($array, true);
echo 'You should not see this end of line because you used preprint with halt=true';
```
```
> This is a sample code for demonstrating this debug tool
> Array
> (
>     [a] => 1
>     [b] => 2
>     [c] => d
> )
```

### Sample 4: 
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($object, true);
echo 'You should not see this end of line because you used preprint with halt=true';
```
```
> This is a sample code for demonstrating this debug tool
> stdClass Object
> (
>     [a] => 1
>     [b] => 2
>     [c] => d
> )
```

### Sample 5:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($null, true);
echo 'You have reached the end of line';
```
```
> This is a sample code for demonstrating this debug tool
> NULL
```

### Sample 6:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($bool_false);
```
```
> This is a sample code for demonstrating this debug tool
> bool(false)
```

### Sample 7:
```
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($bool_false);
```
```
> This is a sample code for demonstrating this debug tool
> array(0) {
}
```

### Sample 8:
``` 
echo 'This is a sample code for demonstrating this debug tool';
echo '<br>';
preprint($empty_string);
```
```
> This is a sample code for demonstrating this debug tool
> string(0) ""
```

This is very useful for such cases where the code get's complicated and you just wanted to quickly find where it goes and see that the result of a specified returned data or just a simple variable data or even just halt the process. Also useful for determining the type of data you've working on which is demonstrated differentiating type bool, null, empty string, empty array, and even empty object.

Feel free to use and add suggestions to improved this little noob function. Cheers!
