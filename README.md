# PHP fopen() Error Handling
This example demonstrates an uncommon error in PHP's file handling, specifically with `fopen()`.  The code includes a simple `if` check to handle potential errors, but this approach has shortcomings.  `fopen()` can fail for reasons beyond file not found, and this example shows how to improve error handling.

**Bug:**  The original code only checks if `fopen()` returns `false` without identifying the cause of the failure. 

**Solution:** The improved version uses `error_get_last()` to retrieve detailed error information, allowing for more precise error handling.