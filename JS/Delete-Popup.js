const popupEl = document.querySelector('#popup')
const closeBtn = document.querySelector('#close')

function delPopup() {

  popupEl.style.display = 'flex'
}

closeBtn.addEventListener('click', function(){
  popupEl.style.display='none'
})