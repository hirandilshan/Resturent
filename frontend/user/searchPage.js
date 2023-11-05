const bar= document.querySelector('#searchBtn');
const cross = document.querySelector('#cancel');
const topbar = document.querySelector('.top-bar');

bar.addEventListener('click',function(){
    setTimeout(()=>{
        topbar.style.bottom='85%';
    },200);
    topbar.style.bottom='0%';
})