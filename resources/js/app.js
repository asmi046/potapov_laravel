import './bootstrap';
import { register } from 'swiper/element/bundle';
register();

import fslightbox from 'fslightbox'

const anchors = document.querySelectorAll('a[href*="#"].yakor')


for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    // main_side_menue.classList.remove('active');

    const blockID = anchor.getAttribute('href').substr(1)
    console.log(blockID)
    document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
    })
  })
}


  const swiperEl = document.getElementById('video_swiper');

  // swiper parameters
  const swiperParams = {
    slidesPerView: 1.5,
    spaceBetween: 48,
    loop: true,
    breakpoints: {

      310: {
        slidesPerView: 1.5,
        spaceBetween: 18,
        },
      640: {
        slidesPerView: 2.5,
        spaceBetween: 28,
      },
      820: {
        slidesPerView: 3.5,
      },
      1024: {
        slidesPerView: 4.5,
      },
    },
  };

  // now we need to assign all parameters to Swiper element
  Object.assign(swiperEl, swiperParams);

  // and now initialize it
  swiperEl.initialize();
