function rgb(r, g, b){
    function hex(value){
        if(value < 0) value = 0;
        if(value > 255) value = 255;

        let quotient = Math.trunc(value / 16);
        let remainder = value % 16

        return toHex(quotient)+toHex(remainder);
    }

    function toHex(val){
        if (val === 10) return 'A';
        else if (val === 11) return 'B';
        else if (val === 12) return 'C';
        else if (val === 13) return 'D';
        else if (val === 14) return 'E';
        else if (val === 15) return 'F';
        else return val;
    }
    return hex(r)+hex(g)+hex(b);
}
console.log(rgb(255,300, 10));
