var flag=0;
var x=11;
var song;
var button;
var img;
function preload(){
	img = loadImage('f.jpg');
}

function windowResized(){
 
	resizeCanvas(windowWidth, windowHeight);
	
}




function setup() {
  var cnv = createCanvas(windowWidth, windowHeight);
  cnv.style('display', 'block');
  background(255, 0, 200);
	cnv.position(0,0);
	cnv.style('z-index','-1');
	var bug = select('.fa-bug');

	song = loadSound("illu.mp3", loaded);
	
	bug.mousePressed(togglePlaying);
		
}

function loaded(){
	console.log('song');
}

function togglePlaying(){
	
	if(!song.isPlaying()){
		
	song.play();
	
	}
	else{
		song.pause();
		
	}
	flag=flag+1;
	
	
}

function draw(){
	
	if(flag ==0){
		background('#444444');
		
	}
	else{
		flag=-1;
	
		background(0);
		image(img,0,0,width,height);
		push();
		rectMode(CENTER);
		translate(mouseX,mouseY);
		rotate(x);
		fill('red');
		triangle(30, 75, 58, 20, 86, 75);
		x=x+10;
		pop();
		
	}
			
}
