let mynavbar = document.querySelector('.navbar');
let mybars = document.querySelector('#bar');

mybars.onclick= () =>{
    mybars.classList.toggle('fa-times')
    mynavbar.classList.toggle('active')
}


