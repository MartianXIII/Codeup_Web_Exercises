<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fibonacci Script</title>
  </head>
  <body>
    <main>
      <h1>Fibo is so Nacci</h1>
    </main>
    <script>
    //ACME5 loop starting index at 2
    //every loop iteration sums up the previous values then pushes them
    function fibonacci() {
      var looping = function(n) {
        var a = 0, b = 1, f = 1;
        for(var j = 2; j <= n; j++) {
          f = a + b;
          a = b;
          b = f;
        }
        return f;
      };

      var recursive = function(m) {
        if(m <= 2) {
          return 1;
        } else {
          return this.recursive(m - 1) + this.recursive(m - 2);
        }
      };
    };
    </script>

    <script>
        //ACME6(2015) Symbol: a data type whois instances are unique and immutable
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
          //truncate the sequence at 1000 every 1000
          if (n > 1000)
            break;
          console.log(n);
        }

    </script>
  </body>
</html>
