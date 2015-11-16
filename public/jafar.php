<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<script>

// ECMA 5
function (x) {
  return x + 1;
}

function (x, y) {
  return x + y;
}
// ECMA 6
x => x + 1
(x, y) => x + y

//Lots and Lots of functions today
[1, 2, 3].forEach(x => console.log(x))
//Can't repeat an async function with a loop dun dun dun
//Programming without loops
[1, 2, 3].map(x => x + 1)
//Takes function and applies to every item in function - each value in the array - Creates new array[Collection]
[1, 2, 3].filter(x => x > 1)
//Test function, apply test to every value
//if it passes test will it go to new Collection[New array]
[ [1], [2, 3], [], [4] ].concatAll()
//Takes Multi Demential array and flattens into 2D
//Empty array falls off, will not recursively flatten

//TOP-RATED Movies Collection
var getTopRatedFilms = user =>
  user.videoLists.
    map(videoList =>
      videoList.videos.
        filter(video => video.rating === 5.0)).
    concatAll();

getTopRatedFilms(user).
  forEach(film => console.log(film));

//MOUSE DRAG code drag and drop event
//all mouse moves between mouse down until mouse up

//Creating a function to acrue Data
var getElementDrags = elmt =>
  elmt.mouseDowns.
    map(mouseDown =>
      document.mouseMoves.
        takeUntil(document.mouseUps)).
    concatAll();

getElementDrags(image).
  forEach(pos => image.position = pos);
  //forEach to Consume and Do something with the Data

  //Events and Arrays are both collections

  //Iterators and Observers

//For Of Loop Ecma6 => incoming
//Iterator object PULL all elements sequentially One by One
var iterator = [1, 2, 3].iterator();
console.log(iterator.next());

//Observer Pattern  adding a function to a data producer
//
document.addEventListener(
  "mousemove",
  function next(e) {
    console.log(e);
  });



</script>
</body>
</html>