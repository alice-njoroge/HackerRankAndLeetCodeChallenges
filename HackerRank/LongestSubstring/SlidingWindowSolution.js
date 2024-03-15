/**
 * input is a string. should return the length of the longest substring without repeating characters.
 * string may contain lower case and upper case digits.
 * string can have single and multiple words.
 *
 *
 * Write a JavaScript function called findLongestSubstring that takes a string as input and returns the length of the longest substring without repeating characters.
 * abcabcbb
 *
 */

function longestSubstring(input){
    if(input){

        // convert everything to lowercase.
        input = input.toLowerCase();

        // check if there are more than one word . (if we have a sentence)
        let words = input.indexOf(" ") > 0 ? input.split(" ") : [input];

        // overall substrings array
        let substrings = [];

        // loop through the words.
        for(let i = 0; i < words.length; i++){

            // Get the current words.
            let word = words[i];

            // Maintain the letters of the words been looped.
            let loopedLetters = [];

            // start index.
            let substringInitialIndex = 0;

            // end index.
            let substringEndIndex = 0;

            for(let j = 0; j < word.length; j++){

                // A repeated letter.

                if(loopedLetters.includes(word[j])){
                    // set index of the prior substring
                    substringEndIndex = j;

                    // add to the substring.
                    substrings.push(word.slice(substringInitialIndex,substringEndIndex));

                    // update the start index for the next substring.
                    substringInitialIndex = j;

                    // reset the looped letters for the next substring.
                    loopedLetters = [];

                }

                // add the current letter to the looped letters
                loopedLetters.push(word[j]);

                // if on the last index, push the lopped letters string to substring.
                if(j == word.length - 1){

                    substrings.push(loopedLetters.join(""));

                }
            }
        }

        // Map the lengths of every item in the substrings array.
        let substringLengths = substrings.map((substr) => substr.length);

        // return the item with the maximum characters
        return Math.max(...substringLengths);

    }else{
        return "No input provided";
    }
};


console.log(longestSubstring("abcabcbbdfg"));