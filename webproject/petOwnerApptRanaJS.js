const button = document.querySelector(".submit");
const extra = document.querySelector(".class-notes")
const post = document.querySelector(".post");
const rating = document.querySelector(".rating");
let allstar = document.querySelector('.star').children;
const rating = document.querySelector('.rating');

for(let i=0; i < star.length; i++){
    allstar[i].addEventListener('click', function(){
        i = this.value;
        rating.innerHTML = i + "out of 5";
    })
}
button.onclick = ()=>{
    rating.style.display = "none";
    extra.style.display= "none";
    post.style.display = "block";
    return false;
}






