//Given an array of words,count how many times each word appears
// and return an object with the counts.

function wordCount(arr) {
    let results = {};

    for(let fruit of arr) {
        results[fruit] = (results[fruit] || 0) + 1;
    }

    return results;

}

let words = ["apple", "banana", "apple", "orange", "banana", "apple"];
console.log(wordCount(words));


