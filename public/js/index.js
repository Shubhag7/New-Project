
// Js for hide and show sidebar

let navToggle = document.querySelector(".nav-toggle");
let sidebar = document.querySelector(".sidebar-design");

navToggle.addEventListener("click",function(){
    
    if(navToggle.firstElementChild.classList.contains("fa-bars-staggered")){
        navToggle.firstElementChild.classList.replace("fa-bars-staggered", "fa-times");
    }
    else
    {
        navToggle.firstElementChild.classList.replace("fa-times", "fa-bars-staggered");
    }
    if(sidebar.classList.contains("show-sidebar")){
        sidebar.classList.remove("show-sidebar");
        document.querySelector('.header-main-menu').parentElement.classList.remove("main-body");
    }
    else
    {
        sidebar.classList.add("show-sidebar");
        document.querySelector('.header-main-menu').parentElement.classList.add("main-body");
    }
})

// funtionality for submenu 

function clickSubMenu(toggle){
    // console.log(document.querySelector('.sub-menu-toggle .dropdown-menu-display'));
    let subMenu =document.getElementById(toggle);
        if(document.getElementsByClassName('dropdown-menu dropdown-menu-display')[0] && (document.getElementsByClassName('dropdown-menu dropdown-menu-display')[0] != document.querySelector('#'+toggle).nextElementSibling)){
            document.getElementsByClassName('dropdown-menu dropdown-menu-display')[0].previousElementSibling.lastElementChild.classList.remove("fa-angle-down");
            document.getElementsByClassName('dropdown-menu dropdown-menu-display')[0].classList.remove('dropdown-menu-display');
        }
    // console.log(subMenu);
    if(subMenu.nextElementSibling.classList.contains("dropdown-menu") && !subMenu.nextElementSibling.classList.contains("dropdown-menu-display")){
        subMenu.nextElementSibling.classList.add("dropdown-menu-display");
        subMenu.lastElementChild.classList.add("fa-angle-down");
    }else
    {
        subMenu.lastElementChild.classList.remove("fa-angle-down");
        subMenu.nextElementSibling.classList.remove("dropdown-menu-display");
    }
}

document.getElementById("sub-menu-toggle-dashboard").onclick = function() {
    clickSubMenu(this.id);
};
document.getElementById("sub-menu-toggle-student").onclick = function() {
    clickSubMenu(this.id);
};
document.getElementById("sub-menu-toggle-teachers").onclick = function() {
    clickSubMenu(this.id);
};
document.getElementById("sub-menu-toggle-parents").onclick = function() {
    clickSubMenu(this.id);
};
document.getElementById("sub-menu-toggle-class").onclick = function() {
    clickSubMenu(this.id);
};

// funtionality for submenu 


// const scrolesidebar = document.querySelector('.sidebar-design');
// scrolesidebar.addEventListener('wheel', (event) => {
//     scrolesidebar.scrollTop += event.deltaY;
//     event.preventDefault();
// });

