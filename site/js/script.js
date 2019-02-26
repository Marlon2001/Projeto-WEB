window.addEventListener('scroll', (event) =>{
    if(window.scrollY > 100)
        document.getElementById("header").classList.add("mostrar");
    else
        document.getElementById("header").classList.remove("mostrar");
});