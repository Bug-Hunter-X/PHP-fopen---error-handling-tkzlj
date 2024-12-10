```php
$file = fopen('somefile.txt', 'r');
if ($file) {
    // Process the file
    fclose($file);
} else {
    $error = error_get_last();
    if ($error) {
        // Handle the error based on error type
        echo "Error opening file: " . $error['message'] . "\n";
    } else {
        echo "Unknown error opening file.\n";
    }
}
```