function reverseString(str) {
    let arr = str.split(' ');
    arr.reverse();
    str = arr.join(' ');

    return str;
}

console.log(reverseString("JavaScript is Awesome"))



function nthLargestItem(arrItems, n) {
     arrItems.sort((a, b)=> a - b);
     arrItems.reverse();
    console.log("arr", arrItems);

     return arrItems[n-1];

}

console.log(nthLargestItem([10, 5, 3, 8, 2 ], 3))