if (document.querySelector('[data-aos]')) {
  AOS.init();
}
// handle header md
const UIlines = document.querySelector('.lines');
const UImainHeaderMdUlDiv = document.querySelector('.main-header-md-ul-div');
const UIdots = document.querySelector('.dots');
const UIdotsSocial = document.querySelector('.dots-social');
UIlines.addEventListener('click', e => {
  UIlines.classList.toggle('is-active');
  UImainHeaderMdUlDiv.classList.toggle('toggle-main-header-md-ul-div');
});
document.addEventListener('click', e => {
  if (e.target.classList.contains('main-header-md-ul-div')) {
    UIlines.classList.remove('is-active');
    UImainHeaderMdUlDiv.classList.remove('toggle-main-header-md-ul-div');
  }
});
UIdots.addEventListener('click', () => {
  UIdotsSocial.classList.toggle('toggle-dots-social');
});

// handle dropdown
const UIdropA = document.querySelectorAll('.drop-a');
const UIdroppedUl = document.querySelectorAll('.dropped-ul');
UIdropA.forEach(link => {
  link.addEventListener('click', e => {
    link.parentElement.classList.toggle('toggle-drop-li');
    for (let ul of UIdroppedUl) {
      ul.style.height = 0 + 'px';
    }
    let ulHeight = 0;
    for (let ele of link.nextElementSibling.children) {
      ulHeight += ele.offsetHeight;
    }
    if (link.nextElementSibling.offsetHeight === 0) {
      link.nextElementSibling.style.height = ulHeight + 'px';
    } else {
      link.nextElementSibling.style.height = 0 + 'px';
    }
    e.preventDefault();
  });
});


// handle scrolling
const UIheaderLg = document.querySelector('.header-lg');
const UIlogoLines = document.querySelector('.logo-lines');

window.addEventListener('scroll', () => {
  if (window.scrollY >= 200) {
    UIlogoLines.classList.add('toggle-logo-lines');
    UIheaderLg.classList.add('toggle-header-lg');
  } else {
    UIlogoLines.classList.remove('toggle-logo-lines');
    UIheaderLg.classList.remove('toggle-header-lg');
  }
})

// home main slider
var mainHomeSLider = new Swiper('.home-main-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  autoplay: {
    delay: 8000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.home-main-slider-next',
    prevEl: '.home-main-slider-prev',
  },
  pagination: {
    el: '.home-main-slider-pagination',
    clickable: true
  },
});

if (document.querySelector('.home-main-slider')) {
  const UItypedP1 = document.querySelectorAll('.typed-p1');
  for (let item of UItypedP1) {
    new Typed(item, {
      stringsElement: '.typed-strings-1',
      typeSpeed: 50,
      startDelay: 2000,
      showCursor: false
    });
  }

  const UItypedp2 = document.querySelectorAll('.typed-p2');
  for (let item of UItypedp2) {
    new Typed(item, {
      stringsElement: '.typed-strings-2',
      typeSpeed: 50,
      startDelay: 3000,
      showCursor: false
    });
  }
}

// home about slider
if (document.querySelector('.home-about-slick-slider')) {
  $('.home-about-slick-slider').slick({});
}

if (document.querySelector('.home-about-slick-slider')) {
  const UIslickPrev = document.querySelector('.slick-prev');
  UIslickPrev.textContent = 'prev';
  const UIslickNext = document.querySelector('.slick-next');
  UIslickNext.textContent = 'next';
}

// home gallery section

if (document.querySelector('.home-light-gallery')) {
  lightGallery(document.querySelector('.home-light-gallery'), {
    thumbnail: true
  });
}


// home upcoming events section
const upcomingEventsSlider = new Swiper('.upcoming-events-slider', {
  slidesPerView: 2,
  direction: 'vertical',
  spaceBetween: 72,
  mousewheel: true,
  loop: true,
  speed: 1000,
  scrollbar: {
    el: '.upcoming-events-slider-scrollbar',
    // hide: true,
  },

  breakpoints: {
    991: {
      direction: 'horizontal',
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 1000
    }
  }
});



// home testmonials slider
var homeTestmonialsSLider = new Swiper('.home-testmonials-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  loop: true,
  slidesPerView: 3,
  spaceBetween: 40,
  breakpoints: {
    1200: {
      slidesPerView: 2,
      spaceBetween: 30,
    },

    767: {
      slidesPerView: 1,
      spaceBetween: 30,
    }
  },

  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: '.testmonials-slider-next',
    prevEl: '.testmonials-slider-prev',
  },
  // pagination: {
  //   el: '.testmonials-slider-pagination',
  //   clickable: true
  // }
});



// home testmonials slider
var homeTestmonialsSLider = new Swiper('.home-testmonials-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1600,
  loop: true,
  slidesPerView: 3,
  spaceBetween: 40,
  breakpoints: {
    1199: {
      slidesPerView: 2,
      spaceBetween: 30,
    },

    767: {
      slidesPerView: 1,
      spaceBetween: 30,
    }
  },

  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: '.testmonials-slider-next',
    prevEl: '.testmonials-slider-prev',
  },
  // pagination: {
  //   el: '.testmonials-slider-pagination',
  //   clickable: true
  // }
});

// home clients slider
var homeClientsSlider = new Swiper('.home-clients-slider', {
  spaceBetween: 0,
  centeredSlides: false,
  speed: 1000,
  loop: true,
  slidesPerView: 5,
  // spaceBetween: 40,
  breakpoints: {
    1199: {
      slidesPerView: 3,
      // spaceBetween: 30,
    },

    767: {
      slidesPerView: 2,
      // spaceBetween: 30,
    }
  },

  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  // navigation: {
  //   nextEl: '.clients-slider-next',
  //   prevEl: '.clients-slider-prev',
  // },
  // pagination: {
  //   el: '.clients-slider-pagination',
  //   clickable: true
  // }
});
// handle trim servcie text

//////////////////////////////////////////////////////////////////
// counter up section
if (document.querySelector('.counter-number')) {
  $('.counter-number').counterUp({
    delay: 10,
    time: 2000
  });
}
// end counter up section
//////////////////////////////////////////////////////////////////


function myTrim(UIele) {
  return UIele.textContent.replace(/^\s+|\s+$/gm, ' ').trim();
}

function trimText(UIele, charCount) {
  let myString = myTrim(UIele).split(' ');
  return myString.splice(0, charCount).join(' ') + '...';
}



if (document.querySelector('.home-services-section')) {
  const UIserviceText = document.querySelectorAll('.service-text p');
  for (let service of UIserviceText) {
    service.textContent = trimText(service, 12);
  }
}