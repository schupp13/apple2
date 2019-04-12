// const burger = document.querySelector('.burger');
//
//
// burger.addEventListener('click', ()=>{
//
// })
//
//
//

//Toggle macbook divs - 13 and 15 inch

const macbook13 = document.querySelector('.mac-13-inch-button');
const macbook15 = document.querySelector('.mac-15-inch-button');

macbook13.addEventListener('click', (e) =>{

  $('.mac13-section').fadeIn(2000);
  $('.mac15-section').hide();
  macbook15.style.border= 'none'
  macbook13.style.border = "2px solid #0070c9";
})

macbook15.addEventListener('click', (e) =>{
  $('.mac15-section').fadeIn(2000);
  $('.mac13-section').hide();

  macbook13.style.border= 'none'
  macbook15.style.border =  "2px solid #0070c9";
})


// event listeners for computer images - row by row column by column

const space1 = document.querySelector('.spacegrey-button1');
const silver1 = document.querySelector('.silver-button1');
const spacePhoto1 = document.querySelector('.13-no-bar-spacegrey1');
const silverPhoto1 = document.querySelector('.13-no-bar-silver1');

space1.addEventListener('click', (e)=>{
  space1.style.border = "solid 1px #0070c9";
  space1.style.borderRadius = "50%";
  silver1.style.border = "none";

  $(silverPhoto1).hide();
  $(spacePhoto1).fadeIn(2000);
})

silver1.addEventListener('click', (e)=>{
  silver1.style.border = "solid 1px #0070c9";
  silver1.style.borderRadius = "50%";
  space1.style.border = "none";

  $(spacePhoto1).hide();
  $(silverPhoto1).fadeIn(2000);
})
