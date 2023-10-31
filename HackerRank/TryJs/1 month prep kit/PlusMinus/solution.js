function plusMinus(arr) {
    let posCount = 0;
    let negCount = 0;
    let zeroCount = 0;
    let len = arr.length;

    for (let i = 0; i < len; i++) {
        if (Math.sign(arr[i]) === 1) {
            posCount += 1
        } else if (Math.sign(arr[i]) === -1) {
            negCount += 1
        } else {
            zeroCount += 1
        }
    }

    console.log((posCount / len).toFixed(6));
    console.log((negCount / len).toFixed(6))
    console.log((negCount / len).toFixed(6))
}

plusMinus([-4, 3, -9, 0, 4, 1])



