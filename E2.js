let i = 0;
function showtheducksmain(){
	
	let image = document.getElementById("images"); 
	image.src = "baby" + i + ".jpg"; 

}
function showtheducksright(){
	
	if(i==5)
	{
		i=1;
	}
	else
	{
	i = i+1;
	}
	showtheducksmain();
}
function showtheducksleft(){
	
	if(i==0)
	{	
		i=5;
	}
	else
	{
		i=i-1;
	}
	showtheducksmain();
}