//header, footer JS
//header 전체메뉴 스크립트 flow
//1. open-nav 초기 숨기기
//2. 햄버거메뉴 클릭 시 open-nav 출력
//3. open-nav 안 x버튼(nav_close) 클릭시 open-nav 숨기기
//변수생성
const nav = document.querySelector('#menu')//햄버거 메뉴
const open_nav = document.querySelector('#open_nav')//nav 클릭 시 open 대상
const closeBtn = document.querySelector('#nav_close')//x닫기
console.log(nav,open_nav,closeBtn)
// 1.open-nav 초기 숨기기 #open_nav {transform:traslateX(?)}
//#open_nav {display:none;}
open_nav.style.transform = 'translateX(100%)';
//2.햄버거메뉴(nav) 클릭 시 open-nav 출력
nav.addEventListener('click',function(){
    open_nav.style.transform = 'translateX(0%)'
    //css 값 상태에 따라 변경이 일어날 경우 애니메이션 transition
    open_nav.style.transition = 'transform 1s ease'
    //display:none 으로 숨김대상을 다시 보이게 할 경우
    //기존 디자인 css에서 flex로 정렬한 대상이라면 display='flex'
    //기존 디자인 css에서 flex 설정이 없었다면 display='block'
})
closeBtn.addEventListener('click',function(){
    open_nav.style.transform = 'translateX(100%)'
})
//swiper-slide open-nav 광고영역
const nav_adver = new Swiper('#nav_adver',{
    diretion:'horizontal',
    autoplay:{delay:1000,},
    loop:true,
    navigation: {
        nextEl: '#nav_adver .swiper-button-next',
        prevEl: '#nav_adver .swiper-button-prev',
    },
    
});