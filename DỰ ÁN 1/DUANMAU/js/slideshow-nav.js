var slideshow = document.querySelector("#slideshow");
var index = 0;
var imgArr = [];
document.body.onload = function(){
    for(var i = 0 ; i <=1;i++){
        imgArr[i] = new Image();
        imgArr[i].src = "images/slideshow/slideshow1" +(i+1)+ ".webp";
    }
    auto();
}
var t;
function auto(){
    t= setInterval("next()",1000);
}
