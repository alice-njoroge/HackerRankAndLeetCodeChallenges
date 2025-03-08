
function stringReverse(s) {
    let left = 0;
    let right = s.length - 1;

    while(left < right){
        let temp = s[left];
        s[left] = s[right];
        s[right] = temp;

        left++;
        right--
    }
    return s;
}

console.log(stringReverse(["h","e","l","l","o"]))