function switcher(x) {
    x = x.map(item => parseInt(item)); // convert strings to numbers, use map to generate new array!!
    let newString = '';

    let dictionary = [];
    let a = 97;
    let z = 122;
    let position = 26

    for (let i = a; i <=z; i++) {
        const char = String.fromCharCode(i);
        dictionary.push({alphabet: char, identifier: position });
        position --
    }

    for (let i = 0; i < x.length; i++) {
        const currChar = x[i]
        if (currChar === 27) newString += '!'
        if (currChar === 28) newString += '?'
        if (currChar === 29) newString += ' '

        for (obj of dictionary){
            if (obj.identifier === currChar){
                newString += obj.alphabet;
            }
        }
    }
    return newString;
}

console.log(switcher(['25','7','8','4','14','23','8','25','23','29','16','16','4']));