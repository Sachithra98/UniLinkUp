<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>


        
        {{ Auth::guard('test')->user()->name }}
        <h1>this is test dashboard</h1>
    </body>
</html>
