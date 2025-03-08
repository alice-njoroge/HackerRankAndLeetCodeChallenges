//You have an object containing student names as keys and their test scores as values.
// Write a function that returns a sorted list of students who scored at least 50, in descending order.

function passedStudents(scores) {
    return Object.keys(scores)
        .filter(score => scores[score] > 50)
        .sort((a,b) => scores[b] - scores[a]);
}


let students = {
    "Alice": 45,
    "Bob": 78,
    "Charlie": 90,
    "David": 50,
    "Eve": 30
};

console.log(passedStudents(students))