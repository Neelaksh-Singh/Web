var offset=0;

var arr=[0,30,60,90,120,150,180,210,240,270,300];
function setup() {
  createCanvas(300, 400);
}

function draw() {
  background(0);
  stroke(255);
  strokeWeight(2);
  noFill();
  for(i=0;i<=9;i++){
   
    fill(random(255),0,random(255),180);
    for(var j=0;j<=height;j=j+30){
    ellipse(arr[i],j,20,20);
    
    }
  arr[i]++;
  if(arr[i]==width){
   arr[i]=0; 
  
  }}
  
}
