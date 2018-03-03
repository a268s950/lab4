function changeBorder(){
  let paragraph = document.getElementById("p");
  let a = document.getElementById("brdRed").value;
  let b = document.getElementById("brdGreen").value;
  let c = document.getElementById("brdBlue").value;
  let size = document.getElementById("brdWidth").value;
  let str = size + "px solid #" + String(a) + String(b) + String(c);
  paragraph.style.border = str;

}
function changeBackground(){
  let paragraph = document.getElementById("p");
  let a = document.getElementById("bgRed").value;
  let b = document.getElementById("bgGreen").value;
  let c = document.getElementById("bgBlue").value;
  let hash = "#";

  let str = hash + String(a) + String(b) + String(c) ;
  console.log(str);
  paragraph.style.backgroundColor = str;
}
