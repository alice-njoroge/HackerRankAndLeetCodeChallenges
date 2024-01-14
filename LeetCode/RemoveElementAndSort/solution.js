function removeElement(nums, val) {
    const filteredArr = nums.filter(num => num !== val);
    filteredArr.sort();
    const k = filteredArr.length;

    return k + ", " + "nums = " + filteredArr;

}
console.log(removeElement([3,2,2,3], 3));