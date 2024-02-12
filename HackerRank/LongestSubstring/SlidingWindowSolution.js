const longestSubstring = (str) => {
    let max = 0;
    let winStart = 0;
    let soFar = {};

    for (let i = 0; i < str.length; i++) {
        let rightChar = str[i];

        soFar[rightChar] = soFar[rightChar + 1] || 1;

        while (soFar[rightChar] > 1) {
            winStart++;
        }

        max = Math.max(max, (i - winStart) + 1);
    }

    return max;

}

console.log("longest", longestSubstring("abcabcbb"))