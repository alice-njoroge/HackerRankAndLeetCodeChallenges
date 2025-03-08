//@ts-check
/**
 * index of an array to mimic js indexOf function
 * @param {string} searchItem
 * @param {string[]} arr
 * @return number
 */
function indexOfD(searchItem, arr = []) {
//if arr is an array
    if (!Array.isArray(arr)) {
        throw Error('Second parameter is expected to be an array');
    }

    if (typeof searchItem !== 'string') {
        throw Error('First parameter is expected to be a string');
    }

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === searchItem) {
            return i;
        }
    }
    return -1;
}

const arrData = ['hans', 'alice', 'jane', 'hans'];
console.log(indexOfD(123, arrData))
console.log(indexOfD('alice', 'isnt it a wonderful day alice?'))