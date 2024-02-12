const BruteForce = (s) => {
    let max = 0;

    for (let i = 0; i < s.length; i++) {
        for (let j = i; j < s.length; j++) {
            const substring = s.slice(i, j + 1);
            if (hasUniqueCharacters(substring)) {
                max = Math.max(max, substring.length);
            }
        }
    }

    return max;
};


function hasUniqueCharacters(str) {
    const charCount = {};
    for (let char of str) {
        charCount[char] = charCount[char] + 1 || 1;
        if (charCount[char] > 1) {
            return false;
        }
    }
    return true;
}

console.log(BruteForce("abcabcbb"));
//console.log(hasUniqueCharacters("ban"));

//console.log("banana".slice(0, 1));