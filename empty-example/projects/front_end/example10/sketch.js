let a=[];
let x=0;
function setup() { 
  
    // Create a Canvas 
    createCanvas(300, 300); 
  angleMode(DEGREES);
} 
  
function draw() { 
    background(0);
    x=x+5;
    for(i=0;i<500;i=i+20){
       for(j=0;j<500;j=j+20){
    push();
    translate(i,j);
    rectMode(CENTER);
    rotate(x);
    rect(0,0,10,10);
    pop();
       }
    }
} 

