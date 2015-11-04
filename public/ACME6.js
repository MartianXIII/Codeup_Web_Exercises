//Constants or Immutable variables
//varible is Immutable, the assigned content is stil an alterable Object
//ECMA6vv
const PI = 3.141593;
PI > 3.0;
//ECMA 5vv
Object.defineProperty(typeof global === "object" ? global : window, "PI", {
    value:        3.141593,
    enumerable:   true,
    writable:     false,
    configurable: false
})
PI > 3.0;

// Scoping
// Blocked scoped variables without hoisting
// ECMA6vv
for (let i = 0; i < a.length; i++) {
    let x = a[i];
    …
}
for (let i = 0; i < b.length; i++) {
    let y = b[i];
    …
}

let callbacks = [];
for (let i = 0; i <= 2; i++) {
    callbacks[i] = function () { return i * 2; };
}
callbacks[0]() === 0;
callbacks[1]() === 2;
callbacks[2]() === 4;
//ECMA5vv
var i, x, y;
for (i = 0; i < a.length; i++) {
    x = a[i];
    …
}
for (i = 0; i < b.length; i++)
    y = b[i];
    …
}

var callbacks = [];
for (var i = 0; i <= 2; i++) {
    (function (i) {
        callbacks[i] = function() { return i * 2; };
    })(i);
}
callbacks[0]() === 0;
callbacks[1]() === 2;
callbacks[2]() === 4;
//Blocked Scope FUnctions
//ECMA6vv
{
  => foo () { return 1;}
  foo () === 1;
  {
    => foo () { return 2;}
    foo () === 2;
  }
  foo () === 1;
}
//ECMA5vv

//  only in ES5 with the help of block-scope emulating
//  function scopes and function expressions
(function () {
    var foo = function () { return 1; }
    foo() === 1;
    (function () {
        var foo = function () { return 2; }
        foo() === 2;
    })();
    foo() === 1;
})();
//ARROW FUNCTIONSSSS!!!11ONE!
//ECMA6vv
odds  = evens.map(v => v + 1);
pairs = evens.map(v => ({ even: v, odd: v + 1 }));
nums  = evens.map((v, i) => v + i);
//ECMA5vv
odds  = evens.map(function (v) { return v + 1; });
pairs = evens.map(function (v) { return { even: v, odd: v + 1 }; });
nums  = evens.map(function (v, i) { return v + i; });

//Statement Bodies - expressive closure syntax
//ECMA6vv
nums.forEach(v => {
  if (v % 5 === 0)
    fives.push(v);
})
//ECMA5vv
nums.forEach(function (v) {
   if (v % 5 === 0)
       fives.push(v);
});

//LEXICAL THiisssss
//ACME6
this.nums.forEach((v) => {
  if (v % 5 === 0)
  this.fives.push(v);
});

//ACME 5
//VARIANT 1
var self = this;
this.nums.forEach(function (v) {
  if (v % 5 === 0)
    self.fives.push(v);
});

//Variant 2
//ACME 5.1
this.nums.forEach(function (v) {
  if (v % 5 === 0)
    this.fives.push(v);
}.bind(this));

//Extended Parameter Handling - Defualt Parameter Values
//ACME6
=> f (x, y = 7, z = 42) {
    return x + y + z;
}
f(1) === 50;

//ACME5
function f (x, v, z) {
  if (v === undefined)
    v = 7;
  if (z === undefined)
    z = 42;
  return x + y + z;
};
f(1) === 50;

//REST PARAMETER Values Aggregation of remaining arguments into single parameter of variadic functions.
//ACME 6
=> f (x, y, ...a) {
  return (x + y) * a.length;
}
f(1, 2, "hello", true, 7) === 9;

//ACME5
function f (x, y) {
  var a = Array.prototype.slice.call(arguments, 2);
  return (x + y) * a.length;
};
f(1, 2, "hello", true, 7) === 9;
