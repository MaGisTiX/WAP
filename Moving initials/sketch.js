function setup() {
  createCanvas(400, 400);
}

function draw() {
  background(255);
  
  strokeCap(SQUARE);
  
  // M
  strokeWeight(mouseX/20);
  line(20, 20, 20, 380);
  line(180, 20, 180, 380);
  line(20, 20, 100, 120);
  strokeWeight(mouseY/20);
  line(180, 20, 100, 120);
  
  // F
  strokeWeight(mouseX/20);
  line(220, 20, 220, 380);
  strokeWeight(mouseY/20);
  line(220, 20, 380, 20);
  line(220, 180, 360, 180);
}