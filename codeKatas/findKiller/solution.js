function killer(suspectInfo, dead) {
  //attempt without Js predefined functions
    //get the individual array items from each object key for key in object assign them to a local variable
    //loop through the dead array items and find if each item in dead is found in suspects arrays (another loop)

    for(const objKey in suspectInfo){
        const suspectData = suspectInfo[objKey];
        let allFound = true; //true to assume that the current suspect might be the killer the next logic will try to disapprove it

        for(let i=0; i < dead.length; i++){ // looping through the victims list
            const currVictim = dead[i];
            let found = false;

            for(let j =0; j < suspectData.length; j++){ //looping through the array with suspect data that a single suspect has seen
                if (currVictim === suspectData[j]){
                    found = true;
                    break;// exit the inner loop since the dead person has been found
                }
            }
            if (!found){
                allFound = false; //current suspect is not the killer
                break; //Exit the loop since the suspect is disqualified
            }
        }
        if (allFound){
            return objKey;
        }
    }
    return "these are innocent!"
}

const info = {
    'James': ['Jacob', 'Bill', 'Lucas'],
    'Johnny': ['David', 'Kyle', 'Lucas'],
    'Peter': ['Lucy', 'Kyle']
}
const killed = ['Lucas', 'Bill']

console.log(killer(info, killed));