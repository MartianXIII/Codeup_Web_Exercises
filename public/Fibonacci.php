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

    <script>
        //ACME6(2015)
        //Iterator objexts enable custom iteration
        let fibonacci = {
          [Symbol.iterator] () {
            let pre = 0, cur = 1;
            return {
              next() {
                [pre, cur] = [cur, pre + cur];
                return { done: false, value: cur }
              }
            }
          }
        }

        for (var n of fibonacci) {
          //truncate the sequence at 1000
          if (n > 1000)
            break;
          console.log(n);
        }

    </script>
  </body>
</html>
