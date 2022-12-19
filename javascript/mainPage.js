function comments_jss(){
    document.getElementById('comment-textarea').style.display='block';
    document.getElementById('svernut').style.display='none';
    document.getElementById('razvernut').style.display='block';
}

function comments_jss_2(){
    document.getElementById('comment-textarea').style.display='none';
    document.getElementById('svernut').style.display='block';
    document.getElementById('razvernut').style.display='none';
}


const searchBox = document.querySelector(".search-box");
const searchBtn = document.querySelector(".search-icon");
const searchInput = document.querySelector("input");
searchBtn.onclick = ()=>{
    searchBox.classList.add("active");
    searchBtn.classList.add("active");
    searchInput.classList.add("active");
}
