

const slides = document.querySelectorAll(".card_works");
const prevButton = document.getElementById('left');
 const nextButton = document.getElementById('right');
var l = 0;
nextButton.onclick = ()=>{
    l++;
    for(var i of slides)
    {
        if (l==0) {i.style.left = "0px";}
        if (l==1) {i.style.left = "-740px";}
        if (l==2) {i.style.left = "-1480px";}
        if (l==3) {i.style.left = "-2220px";}
        if (l==4) {i.style.left = "-2960px";}
        if (l>4) {l=4;}
    }
}
prevButton.onclick = ()=>{
    l--; 
    for(var i of slides)
    {	
        if (l==0) {i.style.left = "0px";}
        if (l==1) {i.style.left = "-740px";}
        if (l==2) {i.style.left = "-1480px";}
        if (l==3) {i.style.left = "-2220px";}
        if (l < 0) {l=0;}
    }
}