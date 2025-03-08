//Given an object where the keys are product names and the values are their prices,
// return the name of the most expensive product.
function mostExpensive(products) {
    return Object.keys(products)
        .filter(name => products[name] === Math.max(...Object.values(products)) )

}

let items = {
    "Phone": 500,
    "Tablet": 700,
    "Laptop": 1200,
    "Smartwatch": 300
};

console.log(mostExpensive(items))
