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

/* 
const searchBox = document.querySelector(".search-box");
const searchBtn = document.querySelector(".search-icon");
const searchInput = document.querySelector("input");
searchBtn.onclick = ()=>{
    searchBox.classList.add("active");
    searchBtn.classList.add("active");
    searchInput.classList.add("active");
}*/


let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
      scrollProgress.style.display = "grid";
    } else {
      scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#ff4669 ${scrollValue}%, #000 ${scrollValue}%)`;
  };
  window.onscroll = calcScrollValue;
  window.onload = calcScrollValue;