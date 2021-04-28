<!DOCTYPE html>
<html>
<body>
<?php

Route::get('/', function (){
    echo "<h2>This is Home Page</h2>;
});
Route::get('/about', function (){
    echo "<h2> This is About Page</h2>";
});
Route::get('/contact', function (){
    echo "<h2> This is Contact Page</h2>";
}); 


?>






</body>
</html>

