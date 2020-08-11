window.onscroll = (e)=>{
    if(document.body.getAttribute('page') == 'home'){

        if(window.scrollY/window.innerHeight>0.1){
            document.querySelector('nav').style.backgroundColor = 'rgba(0,0,0,0.97)';
        }else{
            document.querySelector('nav').style.backgroundColor = 'transparent';
            
        }
    }
}