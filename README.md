# php preprint
## Dakowd's Noob & Simple Debug Function
A quick and easy debugging tool for your PHP projects!

```
$term = any data or value, can be null, integer, array, object, etc.
$halt = true/false or 1/0 - useful to halt the process, by default we set to false so that code after executing this will still continue, but if you want to halt, just pass a value true/1.
```

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
preprint($empty_array);
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

This function is incredibly useful in complex scenarios where you need to quickly trace the flow of your code. It allows you to inspect returned data, check the value of a variable, or even pause execution. Additionally, it helps identify the type of data you’re working with by distinguishing between boolean, null, empty strings, empty arrays, and empty objects. It’s especially helpful when debugging code that you didn’t write yourself.

Feel free to use it and add any suggestions for improvement. Cheers!
