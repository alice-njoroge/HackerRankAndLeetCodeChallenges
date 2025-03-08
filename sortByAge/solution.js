

function addUnique(arr){
    const unique = [];

    for (let str in arr) {
       console.log(arr[str])
    }
    return unique;
}
let strings = ["Hare", "Krishna", "Hare", "Krishna",
    "Krishna", "Krishna", "Hare", "Hare", ":-O"
];

console.log(addUnique(strings))
