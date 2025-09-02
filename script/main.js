let navbar = document.getElementById('navbar');
//menu list varables
let menuListHome = document.getElementById('listId-home');
let menuListAbout = document.getElementById('listId-about');
let menuListProduct = document.getElementById('listId-product');
const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeMenuBtn');
//menu list varables
//icon menu variable
const iconMenuHome = document.getElementById('iconMenu-home');
const iconMenuAbout = document.getElementById('iconMenu-about');
const iconMenuProduct = document.getElementById('iconMenu-product');
const iconMenuProfile = document.getElementById('iconMenu-profile');
//icon menu variable
//variables
const loginWrapper = document.getElementById('login-wrapper');
const modalWrapper = document.getElementById('modal-wrapper');
const modal = document.getElementById('modal');
const modalClose = document.getElementById('modal-close')
const prevBtn   = document.getElementById('prevBtn');
const nextBtn   = document.getElementById('nextBtn');
const sliderContainer = document.getElementById('recomend-cloth');
    //scroll amount for slider
    const scrollAmount = 600;
    //scroll amount for slider
//variables
//menu navigation bar scroll script
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        navbar.classList.add('navbarScroll');
    }else{
        navbar.classList.remove('navbarScroll')
    }
})
//menu navigation bar scroll script
//scroll script menu
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        menuListHome.classList.add('menuLink-scroll');
    }else{
        menuListHome.classList.remove('menuLink-scroll');
    }
})
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        menuListAbout.classList.add('menuLink-scroll');
    }else{
        menuListAbout.classList.remove('menuLink-scroll');
    }
})
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        menuListProduct.classList.add('menuLink-scroll');
    }else{
        menuListProduct.classList.remove('menuLink-scroll');
    }
})
//scroll script menu
//icon menu scroll scripr
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        iconMenuHome.classList.add('iconMenu-scroll');
    }else{
        iconMenuHome.classList.remove('iconMenu-scroll');
    }
})
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        iconMenuAbout.classList.add('iconMenu-scroll');
    }else{
        iconMenuAbout.classList.remove('iconMenu-scroll');
    }
})
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        iconMenuProduct.classList.add('iconMenu-scroll');
    }else{
        iconMenuProduct.classList.remove('iconMenu-scroll');
    }
})
window.addEventListener('scroll', ()=> {
    if (window.scrollY > 0) {
        iconMenuProfile.classList.add('iconMenu-scroll');
    }else{
        iconMenuProfile.classList.remove('iconMenu-scroll');
    }
})
//icon menu scroll scripr
//menu buton mobile
menuBtn.addEventListener('click', ()=>{
    if(menuBtn){
        navbar.classList.add('navbarActivate');
        menuBtn.style.display = "none"; 
        closeBtn.style.display = "block";
    }
})
closeMenuBtn.addEventListener('click', ()=>{
    if(closeMenuBtn){
        navbar.classList.remove('navbarActivate');
        menuBtn.style.display = "block"; 
        closeBtn.style.display = "none";
    }
})
//menu buton mobile
//profile login script
iconMenuProfile.addEventListener('click', ()=>{
        loginWrapper.classList.toggle('login-wrapper-click');
})
//profile login script
// fucntion modal
function showModal(productData){
    //information variables
        const titleProdcut = productData.dataset.title;
        const modalDesc = productData.dataset.desc;
        const modalQty  = productData.dataset.qty;
        const modalIMG  = productData.dataset.img;
        const modalIMG1  = productData.dataset.img1;
        const modalIMG2  = productData.dataset.img2;
        const modalIMG3  = productData.dataset.img3;
        const price = productData.dataset.price;
    //information variables
    //information values
         document.getElementById('modal-img').src = modalIMG;
        document.getElementById('modal-title').textContent = titleProdcut;
         document.getElementById('modal-desc').textContent = modalDesc;
          document.getElementById('modal-qty').textContent = modalQty;
          document.getElementById('modal-price').textContent = price;
    //information values  
     //show modal
    modalWrapper.style.display = "flex";

    //makeURL
     const buyLink = `shoppage.php?title=${encodeURIComponent(titleProdcut)}&desc=${encodeURIComponent(modalDesc)}&qty=${encodeURIComponent(modalQty)}&price=${encodeURIComponent(price)}&img=${encodeURIComponent(modalIMG)}&img1=${encodeURIComponent(modalIMG1)}&img2=${encodeURIComponent(modalIMG2)}&img3=${encodeURIComponent(modalIMG3)}`;
     document.querySelector('#modal-btn a').href = buyLink;
    //makeURL
}
// fucntion modal
//modal close
modalClose.addEventListener('click', ()=>{
    if(modalClose){
    modalWrapper.style.display = "none";
}
})
//modal close
//slider recomend
prevBtn.addEventListener('click', ()=>{
    sliderContainer.scrollBy({left: -scrollAmount, behavior: "smooth"})
})

nextBtn.addEventListener('click', ()=>{
    sliderContainer.scrollBy({left: scrollAmount, behavior: "smooth"})
})
//slider recomend

