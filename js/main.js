window.onscroll = function (){
    if(scrollY > 100){
        document.getElementById("arrow").classList.remove("arrow-2")
    } else if(scrollY < 100){
        document.getElementById("arrow").classList.add("arrow-2")
    }
};

function up(){
    scroll(0,0)
};