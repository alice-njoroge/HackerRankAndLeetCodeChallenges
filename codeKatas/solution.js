function rgb(r, g, b){
    function toHex (value){
        if (value > 255) value = 255;
        if (value < 0) value = 0;

        let hex = value.toString(16).toUpperCase();
        return hex.length === 1 ? '0'+ hex : hex;

    }
    return toHex(r)+toHex(g)+toHex(b);
}
console.log(rgb(255,300, 10));
