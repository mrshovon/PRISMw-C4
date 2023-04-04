  function myFunction2() {
    var x = document.getElementById("hidden");
    if (x.style.display === "none") {
        x.style.display = "block";


    } else {
      x.style.display = "none";
    }
  }
  function myFunction3() {
    var x = document.getElementById("services");
    if (x.style.display === "none") {
       x.style.display = "block";
       x.style.backgroundColor = "white";
    } else {
      x.style.display = "none";
    }
  }

  function searchResult(){
    const sr = document.getElementById('searchResult');
    sr.innerHTML= '';
    for(i=1;i<=10;i++){
      sr.innerHTML += `<div class="search-main animate__animated animate__fadeInLeft" >
        <div style="margin-left: 27px; margin-top: 9px;">
          <img src="https://www.timeoutdubai.com/cloud/timeoutdubai/2021/09/14/yvA5SpUH-IMG-Worlds-1200x900.jpg" alt="" style="width:200px; height: 180px; border-radius: 0px;"> 
        </div>
        <div style=" margin-top: 9px;margin-left: 19px;">
          <h3>Price: xxxxxxxx </h3>
          <h6>Property-type: appartment </h6>
          <h6>Property-type: residential</h6>
          <h6>size: xx sqft  </h6>
          <h6>bed:x </h6>
          <h6>baths:x </h6>
          <a href="property-details.html" class="btn btn-info" style="position: relative; position: relative;bottom: 33px;left: 168px;">Details</a>
        </div>
      </div>`;
    }
  }

  function slidePrev(){
    const img1 = document.getElementById('image1');
    const img2 = document.getElementById('image2');
    const img3 = document.getElementById('image3');

  if(img1.style.display === "block"){
    img1.style.display ="none";
    img2.style.display ="none";
    img3.style.display="block";
    img3.classList.add("animate__animated");
    img3.classList.add("animate__flipInX");
  }
  else if(img2.style.display === "block"){
    img1.style.display ="block";
    img1.classList.add("animate__animated");
    img1.classList.add("animate__flipInX");
    img2.style.display ="none";
    img3.style.display="none";
  }
  else{
    img1.style.display ="none";
    img2.style.display ="block";
    img2.classList.add("animate__animated");
    img2.classList.add("animate__flipInX");
    img3.style.display="none";
  }
}

function slideNext(){
  const img1 = document.getElementById('image1');
  const img2 = document.getElementById('image2');
  const img3 = document.getElementById('image3');

if(img1.style.display === "block"){
  img1.style.display ="none";
  img2.style.display ="block";
  img2.classList.add("animate__animated");
  img2.classList.add("animate__flipInX");
  img3.style.display="none";
}
else if(img2.style.display === "block"){
  img1.style.display ="none";
  img2.style.display ="none";
  img3.style.display="block";
  img3.classList.add("animate__animated");
  img3.classList.add("animate__flipInX");
}
else{
  img1.style.display ="block";
  img1.classList.add("animate__animated");
  img1.classList.add("animate__flipInX");
  img2.style.display ="none";
  img3.style.display="none";
}

}
// function loadNav(){
//   const tag = document.getElementsByTagName("nav");
//   tag[0].classList.add('navv');
// }
window.onload =function(){

    const tag = document.getElementsByTagName("nav");
    tag[0].classList.add('navv');
  
}
window.onscroll = function() {
  var navbar = document.querySelector('.navv');
  if (window.pageYOffset > 50) {
    navbar.classList.add('sticky');
    navbar.classList.add('animate__animated');
    navbar.classList.add('animate__slideInDown');
  } else {
    navbar.classList.remove('sticky');
    navbar.classList.remove('animate__animated');
    navbar.classList.remove('animate__slideInDown');
  }
};

