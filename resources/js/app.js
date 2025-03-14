import './bootstrap';
import { register } from 'swiper/element/bundle';
register();


const anchors = document.querySelectorAll('a[href*="#"].yakor')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    // main_side_menue.classList.remove('active');
    const blockID = anchor.getAttribute('href').substr(1)
    console.log(blockID)
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
