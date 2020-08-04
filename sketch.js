function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
    canvasSetup;
}
function setup() {
    canvas = createCanvas(windowWidth, windowHeight, WEBGL);
}

function draw() {
    background(255);
}