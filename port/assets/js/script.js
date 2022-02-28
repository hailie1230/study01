let isClikedOpen = false;

window.addEventListener("scroll", scrolling);

function scrolling()
{
  // scroll Top 값 구하기
  let scroll = document.documentElement.scrollTop || window.scrollY || window.pageYOffset;
  document.querySelector(".scroll").textContent = scroll;

  // mobile - width값 800에 따른 nav메뉴 효과  
  if (window.innerWidth > 800) 
  {
    if(isClikedOpen == false) 
    {
      if( scroll > 0 )
      {
        document.querySelector(".gnbWrap").classList.add("gnbHide");
      }else
      {
        document.querySelector(".gnbWrap").classList.remove("gnbHide");
      }
    }
    
  }
};

// 브라우저 width값 구하기 
window.addEventListener("resize", resizing);
function resizing(scrollBar)
{
  let resize = window.innerWidth;
  document.querySelector(".innerWidth").textContent = resize;
}

//** gnb메뉴 시작 **
// 클릭 이벤트
const toggleBtnPc     = document.querySelector('.rightBtn');
const toggleBtnMobile = document.querySelector('.rightBtnMo');
const gnbWrap         = document.querySelector('.gnbWrap');
const showClose       = document.querySelector('.gnbWrap');
const btnClicked      = document.querySelectorAll('.btnClicked');
const clickRemove     = gnbWrap.classList.remove('active');
// console.log(btnClicked);

// pc 
toggleBtnPc.addEventListener('click', () => 
{
  gnbWrap.classList.toggle('showClose');
  
  // 스크롤 뒤 nav메뉴를 펼쳤을때, 스크롤 하더라도 nav메뉴가 접히지 않도록!
  if(isClikedOpen == true)
  {
    isClikedOpen = false;
  }
  else
  {
    isClikedOpen = true;
  }
});

// mobile
toggleBtnMobile.addEventListener('click', () => 
{
  gnbWrap.classList.toggle('active');
});


// ** animation - gallery 
let aniGellery = document.querySelector('.sec5Box')
let outBtn = document.querySelector('.outBtn')
let gallery = document.querySelector('.gallery')

aniGellery.addEventListener('mouseover', (event) => {
  event.target.parentNode.classList.add('active');  
})
aniGellery.addEventListener('mouseout', (event) => {
  event.target.parentNode.classList.remove('active');
})
// aniGellery.addEventListener('click', (event) => {
//   event.target.parentNode.classList.toggle('click');  
// })

