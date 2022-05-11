const header = document.querySelector('header')

const imgPosition = document.querySelectorAll('.aspect-ratio-169 img')
const dotItem = document.querySelectorAll('.dot')
const imgContainer = document.querySelector('.aspect-ratio-169')
let index = 0

imgPosition.forEach(function(image, index) {
    image.style.left = index * 100 + "%";
    dotItem[index].addEventListener('click', function() {
        slider(index)
    })
})

function slider(index) {
    imgContainer.style.left = index * (-100) + '%'
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add('active')
}

function imgSlide() {
    index++;
    if (index >= imgPosition.length - 1) {
        index = 0;
    }
    slider(index)
}
setInterval(imgSlide, 5000)

const bestsale_block = document.querySelector('.bestsale__block');

const info__block = document.querySelector('.info__block');

const guarantee_items = document.querySelectorAll('.guarantee-item');
var offset = 0;
var lastScrollTop = 0;

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function() { // or window.addEventListener("scroll"....
    var st = window.pageYOffset; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    if (st > lastScrollTop) {
        // downscroll code
        header.classList.add('sticky')

    } else {
        // upscroll code
        header.classList.remove('sticky')
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

// Animation for list-item
function animationList(guarantee_items) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const { target } = entry;
            target.classList.toggle('animationItem', entry.isIntersecting)
        })
        console.log(entries);

    }, {})
    guarantee_items.forEach(function(guarantee_item) {
        observer.observe(guarantee_item)
    })
}
animationList(guarantee_items)
    // Animation for item
function animationItem(guarantee_items) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const { target } = entry;
            target.classList.toggle('animationItem', entry.isIntersecting)
        })
        console.log(entries);

    }, {})
    observer.observe(guarantee_items)

}
animationItem(info__block)
animationItem(bestsale_block)
const banner_2 = document.querySelector('.banner-2')
const banner_3 = document.querySelector('.banner-3')
const line_col = document.querySelector('.line_col')
const title_home = document.querySelector('.home-banner-text h2')
const para_home = document.querySelector('.home-banner-text p')
const btn_buynow = document.querySelector('.btn-buynow');
const product_item = document.querySelectorAll('.home-product-list .slide__item');
animationItem(line_col)
animationItem(title_home)
animationItem(para_home)
animationItem(btn_buynow)
animationList(product_item)
animationItem(banner_2)
animationItem(banner_3)