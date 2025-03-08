function twoSum(numbers, target) {
    let left = 0;
    let right = numbers.length - 1;

    let currSum = 0;
    let nums = [];

    while (left < right) {
        currSum = numbers[left] + numbers[right];
        if (currSum === target) {
            nums.push(numbers[left], numbers[right]);
            return nums;
        }

        if (currSum > target) {
            right--;
        } else {
            left++;
        }

    }
    return false;

}

console.log(twoSum([2, 7, 11, 15], 9))