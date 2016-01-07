var fizzbuzz = function(number) {
  if (number % 15 == 0) {
  console.log('fizzbuzz');
} else if (number % 3 == 0) {
    console.log('fizz');
  } else if (number % 5 == 0){
    console.log('Buzz');
  } else {
    console.log(number);
  }
  if ( number < 100 ) {
    var nextNumber = number + 1;
    fizzbuzz(nextNumber);
  }
};
fizzbuzz(1);


function fibonacci(number){
  if (number < 2) return 1;
  return fibonacci(number - 2) + fibonacci(number - 1);
}
fibonacci(4);

for(i = 0; i < 100;)console.log((++i % 3 ? '' : 'Fizz')+(i % 5 ? '':'Buzz') || i)

var fizzbuzz = function(n) {
  if (n % 15 == 0 ) {
    return('Fizzbuzz');
    var fizz = function(n) {
      if (n % 3 == 0) {
        console.log('fizz');
        var buzz = function(n){
          if (n % 5 == 0) {
            console.log('buzz');
          }
        }
      }
    }

  }
  if(n < 100){
    var nn = n + 1;
    fizzbuzz(nn);
  }
}
fizzbuzz(1);
fizz(1);
buzz(1);

console.log(
  [ for (i of Array(100).keys())
    (++i % 3 ? '' : 'fizz') + (i % 5 ? '' : 'buzz') || i ].join('\n'));
