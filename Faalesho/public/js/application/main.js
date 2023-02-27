let menu = false;

function menu_st(){

    if (menu == false){
        document.getElementById("menu").style.width="100%"
        document.getElementById("menu_content").style.display="block";
        menu = true;
    }else{
        document.getElementById("menu").style.width="50px"
        document.getElementById("menu_content").style.display="none";
        menu = false;
    }
    
}

