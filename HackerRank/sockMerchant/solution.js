const occurrences = [5, 5, 5, 2, 2, 2, 2, 2, 9, 4].reduce(function (acc, curr) {
    console.log("acc ", acc[curr] + " curr", curr)
   return acc[curr] ? ++ acc[curr] : acc[curr] = 1, acc ;
}, {});


console.log(occurrences)