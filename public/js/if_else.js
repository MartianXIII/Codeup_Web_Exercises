// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['r', 'o', 'y', 'g', 'b', 'i', 'v'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'r'; // TODO: change this to your favorite color from the list
console.log('Random Color: ' + color);

if (color == "r") {
	console.log("Red is like Blood, you must like Game of Thrones");
} else if (color == "o")  {
	console.log ("Orange you glad to see me?")
} else if(color == "y") {
	console.log("Yellow? The Simpsonssss");
} else if (color == "g") {
	console.log("Money, Monie, Mone")
} else if(color == "b") {
	console.log("blue 42, Blue 42, hut,hut,hike")
} else if(color = "i") {
	console.log("Indigo....wut")
} else {
	console.log("Violet, you're turning Violet - Violet"); 
}

 var message = (color == favorite)? color + " There will be blood!" : color + " nahhh";
 console.log(message);



// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.