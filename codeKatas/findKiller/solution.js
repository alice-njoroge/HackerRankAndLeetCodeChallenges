function killer(suspectInfo, dead) {
    for (const key in suspectInfo) {
        const allFound = dead.every(item => suspectInfo[key].includes(item));
        if (allFound) return key;
    }
}

const info = {
    'James': ['Jacob', 'Bill', 'Lucas'],
    'Johnny': ['David', 'Kyle', 'Lucas'],
    'Peter': ['Lucy', 'Kyle']
}
const killed = ['Lucas', 'Bill']

console.log(killer(info, killed));