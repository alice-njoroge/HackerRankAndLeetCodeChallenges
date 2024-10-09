
const redSlider = document.getElementById('red') //access the input
const greenSlider = document.getElementById('green')
const blueSlider = document.getElementById('blue');

let num;


//receive an array the join
function updateBgColor(r, g, b) {
    document.body.style.backgroundColor = `rgb(${r}, ${g}, ${b})`
}

function handleSlide () {
    updateBgColor(redSlider.value, greenSlider.value, blueSlider.value);
}
// redSlider.addEventListener('input', handleSlide);
// greenSlider.addEventListener('input', handleSlide);
// blueSlider.addEventListener('input', handleSlide);


document.querySelector('form').addEventListener('input', handleSlide)
