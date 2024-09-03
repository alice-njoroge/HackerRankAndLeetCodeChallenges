function solution(str){
    if (str.length % 2 !== 0) str += '_';
    let pairs = [];

    for (let i=0; i<str.length; i+=2){
        pairs.push(str[i] + str[i+1]);
    }

    return pairs;
}

console.log(solution('abcdefg'));