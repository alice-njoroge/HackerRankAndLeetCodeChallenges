function digitalRoot(n) {
    while (n >= 10 ){
        n = n.toString().split('').reduce((acc, curr) => acc + parseInt(curr), 0);
    }
    return n;
}

console.log(digitalRoot(1990));