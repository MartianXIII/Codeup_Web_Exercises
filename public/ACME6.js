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

//SPREAD OPERATOR  EXTENDED PARMETER Handling
//ACME 6
var params = [ "hello", true, 7]
var other = [1, 2, ... params ]
f(1, 2, ...params  === 9

var str = "foo"
var chars = [ ...str ] // ["f", "o", "o"]

//ACME 5
var params = ["hello", true, 7];
var other = [1, 2].concat(params); // [1, 2, "hello", true, 7];
f.apply(undefined, [1, 2].concat(params)) === 9;

var str = "foo";
var chars = str.split(""); // ["f", "o", "o"]
//ACME 6

//TEMPLATE LITERALS --- STRING INTERPOLATION
//ACME6 originally known as Template Strings
var customer = { name: "Foo"}
var card = { amount: 7, product: "Bar", unitprice: 42 }
message = `Hello ${customer.name},
want to buy ${card.amount} ${card.product} for
a total of ${card.amount * card.unitprice} bucks?`

//ACME5
var customer = { name: "Foo" };
var card = { amount: 7, product: "Bar", unitprice: 42 };
message = "Hello" + customer.name + ",\n" +
"want to buy" + card.amount + " " + card.product + " for\n" +
" a total of" + (card.amount * card.unitprice) + " bucks?";

//Custom Interpolation ACME6
get`http://example.com/foo?bar=${bar + baz}&quux=${quux}`

//ACME5
get([ "http://example.com/foo?bar=", "&quux=", "" ],bar + baz, quux);

function quux (strings, ..value) {
  strings[0] === "foo\n"
  strings[1] === "bar"
  strings.raw[0] === "foo\\n"
  strings.raw[1] === "bar"
}

//Template Literals - raw string access
function quux (strings, ...values) {
    strings[0] === "foo\n"
    strings[1] === "bar"
    strings.raw[0] === "foo\\n"
    strings.raw[1] === "bar"
    values[0] === 42
}
quux `foo\n${ 42 }bar`

String.raw `foo\n${ 42 }bar` === "foo\\n42bar"

//Extended Literals
//Acme 6
//Binary && Octal Literals
0b111110111 === 503
0o767 === 503
//acme5 -->
parseInt("111110111", 2) === 503;
parseInt("767", 8) === 503;
0767 === 503; //Non strict backwards compatible modee



const numbers = [1, 2, 3, 4];
const moreNumbers = [...numbers, 5, 6];
console.log(moreNumbers);

//Unicode String &Reg Exp Literals ACME 6
"𠮷".length === 2
"𠮷".match(/./u)[0].length === 2
"\u{20BB7}" === "𠮷" === "\uD842\uDFB7"
"𠮷".codePointAt(0) == 0x20BB7
for (let codepoint of "𠮷") console.log(codepoint)

//acme5
"𠮷".length === 2;
"𠮷".match(/(?:[\0-\t\x0B\f\x0E-\u2027\u202A-\uD7FF\uE000-\uFFFF][\uD800-\uDBFF][\uDC00-\uDFFF][\uD800-\uDBFF](?![\uDC00-\uDFFF])(?:[^\uD800-\uDBFF]^)[\uDC00-\uDFFF])/)[0].length === 2;
"𠮷" === "\uD842\uDFB7";
//  no equivalent in ES5
//  no equivalent in ES5

//Enhanced Regular Expression
//Regular exp sticky matching
//ACME6
let parser = (input, match) => {
    for (let pos = 0, lastPos = input.length; pos < lastPos; ) {
        for (let i = 0; i < match.length; i++) {
            match[i].pattern.lastIndex = pos
            let found
            if ((found = match[i].pattern.exec(input)) !== null) {
                match[i].action(found)
                pos = match[i].pattern.lastIndex
                break
            }
        }
    }
}
let report = (match) => {
    console.log(JSON.stringify(match))
}
parser("Foo 1 Bar 7 Baz 42", [
    { pattern: /^Foo\s+(\d+)/y, action: (match) => report(match) },
    { pattern: /^Bar\s+(\d+)/y, action: (match) => report(match) },
    { pattern: /^Baz\s+(\d+)/y, action: (match) => report(match) },
    { pattern: /^\s*/y,         action: (match) => {}            }
])

//acme5
var parser = function (input, match) {
    for (var i, found, inputTmp = input; inputTmp !== ""; ) {
        for (i = 0; i < match.length; i++) {
            if ((found = match[i].pattern.exec(inputTmp)) !== null) {
                match[i].action(found);
                inputTmp = inputTmp.substr(found[0].length);
                break;
            }
        }
    }
}
var report = function (match) {
    console.log(JSON.stringify(match));
};
parser("Foo 1 Bar 7 Baz 42", [
    { pattern: /^Foo\s+(\d+)/, action: function (match) { report(match); } },
    { pattern: /^Bar\s+(\d+)/, action: function (match) { report(match); } },
    { pattern: /^Baz\s+(\d+)/, action: function (match) { report(match); } },
    { pattern: /^\s*/,         action: function (match) {}                 }
]);

//Enhanced object Properties -
//Property shorthand ACME 6
obj = { x, y }

//Acme 5
obj = { x : x, y: y };

//Computed property names acme 6
obj = {
  foo: "bar",
  [ "prop_" + foo() ]: = 42
}
//acme 5
obj = {
  foo: "bar"
};
obj [ "prop_" + foo() ] = 42;

//Method Properties acme 6

obj = {
  foo (a, b) {
  },
  bar (x, y) {
  },
  *quux (x, y) {
  }
}
//acme 5
obj = {
  foo: function (a, b) {
  },
  bar: function (x, y) {
  },
  // quux no equivalent in ES5
};

//Destructuring Assignment
// Array Matching Acme6

var list = [1, 2, 3]
var [ a, , b ] = list
[ b, a ] = [ a, b]

//acme 5
var list = [ 1, 2, 3 ];
var a =list[0], b = list[2];
var tmp = a; a = b; b = tmp;

//Object Matching, Shorthand Notation
//acme6
var { op, lhs, rhs } = getASTNode()

//acme5
var tmp = getASTNode();
var op  = tmp.op;
var lhs = tmp.lhs;
var rhs = tmp.rhs;

//acme six

//acme five
