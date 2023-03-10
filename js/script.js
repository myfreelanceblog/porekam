jQuery(document).ready(function($){
    $('.contents__list a').on('click', function (e) {
        e.preventDefault();
        var navPos = $($(this).attr('href')).offset().top - 30;
        $("html, body").animate({ scrollTop: navPos }, 600);
        return false;
    });

    $('.share-copy').click(function() {
        $('.share-popup').css('width', $('.share-popup').outerWidth());
        let btn = $(this);
        let oldTxt = $(this).text();
        $(btn).html('Скопировано');
        navigator.clipboard.writeText(window.location.href);
    });

    $(".share-telegram").click(function(){window.open('https://telegram.me/share/url?url='+location.href,'sharer','toolbar=0,status=0,width=700,height=400');});
    $(".share-vk").click(function(){window.open('https://vkontakte.ru/share.php?url='+location,'sharer','toolbar=0,status=0,width=700,height=400');});
    $(".share-fb").click(function(){window.open('https://www.facebook.com/sharer.php?u='+location,'sharer','toolbar=0,status=0,width=700,height=400');});

    $('.scroll-content').prepend($('.side-copy').clone());
    $('.boat-cat__item').on('click', function () {
        $('.boat-cat__item, .boat-tab__item').removeClass('active');
        $(this).addClass('active');
        $('.boat-tab__item').eq($(this).index()).addClass('active');
    })
    $('.mob-m').click(function(){
        $(this).addClass('openm');
        $('body').addClass('open-m');
        $('footer').after('<div class="over_bg"></div>');
    });

    $(document).on('click', '.over_bg, .mobile-menu__close', function(){
        $('.over_bg').remove();
        $('body').removeClass('open-m');
        $('.mob-m').removeClass('openm');
    });

    $.fancybox.defaults.backFocus = false;
    $.fancybox.defaults.hash = false
    
    $('.excurs-cat__item').on('click', function () {
        $('.excurs-cat__item').removeClass('active');
        $(this).addClass('active');
    });

    $('.search__more').on('click', function () {
        $(this).toggleClass('active');
        $('.search-input._more').toggleClass('active');
    })

    $('.faq-item__title').on('click', function () {
        $(this).toggleClass('active').next().slideToggle();
    })
    $('.faq-item__title').first().click();

    const yaSwiper = new Swiper('.ya-swiper', {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.ya-next',
            prevEl: '.ya-prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })
    const gSwiper = new Swiper('.g-swiper', {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.g-next',
            prevEl: '.g-prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })
    const gisSwiper = new Swiper('.gis-swiper', {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.gis-next',
            prevEl: '.gis-prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const whatSwiper = new Swiper('.what__swiper', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.what__next',
            prevEl: '.what__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const anotherSwiper = new Swiper('.another__swiper', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.another__next',
            prevEl: '.another__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const mstockSwiper = new Swiper('.mstock__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.mstock__next',
            prevEl: '.mstock__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const anotherSlSwiper = new Swiper('.another-slider__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.another-sale__next',
            prevEl: '.another-sale__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const sameSwiper = new Swiper('.same__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.same-article__next',
            prevEl: '.same-article__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const contentsSwiper = new Swiper('.contents-slider__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const revSwiper = new Swiper('.rev__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
    })

    const revexSwiper = new Swiper('.revex__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.revex__next',
            prevEl: '.revex__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const relatedSwiper = new Swiper('.related__swiper', {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.related__next',
            prevEl: '.related__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const actualSwiper = new Swiper('.actual__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.actual__next',
            prevEl: '.actual__prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const photoSwiper = new Swiper('.photo__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.photo__next',
            prevEl: '.photo__prev',
        },
        breakpoints: {
            120: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const interestSwiper = new Swiper('.interest__swiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: false,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.interest__next',
            prevEl: '.interest__prev',
        },
        breakpoints: {
            120: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const partnerSwiper = new Swiper('.partner__swiper', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.partner__next',
            prevEl: '.partner__prev',
        },
        breakpoints: {
            120: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const newsSwiper = new Swiper('.news__swiper', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.news__next',
            prevEl: '.news__prev',
        },
        breakpoints: {
            120: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })

    const videoSwiper = new Swiper('.video__swiper', {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 600,
        loop: true,
        loopAdditionalSlides: 1,
        navigation: {
            nextEl: '.video__next',
            prevEl: '.video__prev',
        },
        breakpoints: {
            120: {
                spaceBetween: 20,
                slidesPerView: 1,
            },
            992: {
                spaceBetween: 30,
            }
        }
    })
	
});

const lazyItems = document.querySelectorAll('._lazy-items');

if (lazyItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);

    function animOnScroll(){
        for (let index = 0; index < lazyItems.length; index++) {
            const animItem = lazyItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;
            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                animItem.classList.add('_loaded');
            }
        }
    }

    function offset(el){
        const rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }

    setTimeout(function () {
        animOnScroll();
    }, 300)
}

/* select custom */
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("search-input");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);



/* scroll */
const postDetails = document.querySelector(".scrl-content");
const postSidebar = document.querySelector(".scrl-sidebar");
const postSidebarContent = document.querySelector(".scrl-wrap");

const controller = new ScrollMagic.Controller();
const scene = new ScrollMagic.Scene({
    triggerElement: postSidebar,
    triggerHook: 0,
    duration: getDuration
}).addTo(controller);

if (window.matchMedia("(min-width: 992px)").matches) {
    scene.setPin(postSidebar, { pushFollowers: false });
}

// in your projects, you might want to debounce resize event for better performance
window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 992px)").matches) {
        scene.setPin(postSidebar, { pushFollowers: false });
    } else {
        scene.removePin(postSidebar, true);
    }
});

function getDuration() {
    return postDetails.offsetHeight - postSidebarContent.offsetHeight;
}