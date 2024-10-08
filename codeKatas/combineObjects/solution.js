function combine(...objects) { //rest operator is going to put all the params into an array
    const combinedObj = {};
    for (const iteratee of objects) {
        for (let currKey in iteratee) {
            if (combinedObj[currKey]) { //check if the current key already exists and sum the numbers
                combinedObj[currKey] += iteratee[currKey]
            } else {
                combinedObj[currKey] = iteratee[currKey];
            }
        }
    }

    return combinedObj;

}
console.log(combine({ a: 10, b: 20, c: 30 }, { a: 3, c: 6, d: 3 }));
