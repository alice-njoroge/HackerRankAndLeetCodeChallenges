function busPassengers(busStops){
    let peopleLeft = 0;
    for (let i in  busStops){
        peopleLeft += busStops[i][0];
        peopleLeft -= busStops[i][1];
    }
    return peopleLeft;
}

console.log(busPassengers([[3,0],[9,1],[4,10],[12,2],[6,1],[7,10]]))