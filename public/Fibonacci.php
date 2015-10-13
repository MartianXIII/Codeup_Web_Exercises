<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fibonacci Script</title>
  </head>
  <body>
    <script>
      var looping = function(n) {
        var a = 0, b = 1, f = 1;
        for(var j = 2; j <= n; j++) {
          f = a + b;
          a = b;
          b = f;
        }
        return f;
      };
    </script>
  </body>
</html>
