function setup() {
  createCanvas(400, 400);
}

function draw() {
  background('#a2a8d3');
 
  for(i=0;i<100;i++){
  
    rect(random(400),random(400),10,10);
  }
}
