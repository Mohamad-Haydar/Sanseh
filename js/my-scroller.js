// // /*-------------------- Vars --------------------*/

// // const $my_menu = document.querySelector('.my-menu')
// // const $my_items = document.querySelectorAll('.my-menu--item')
// // const $my_images = document.querySelectorAll('.my-menu--item img')
// // let my_menuWidth = $my_menu.clientWidth
// // let my_itemWidth = $my_items[0].clientWidth
// // let my_wrapWidth = $my_items.length * my_itemWidth

// // let my_scrollSpeed = 0
// // let my_oldScrollY = 0
// // let my_scrollY = 0
// // let my_y = 0


// // /*--------------------  my_lerp --------------------*/
// // const my_lerp = (v0, v1, t) => {
// //   return v0 * ( 1 - t ) + v1 * t
// // }


// // /*-------------------- my_dispose --------------------*/
// // const my_dispose = (scroll) => {
// //     gsap.set($my_items, {
// //         x: (i) => {
// //             return i * my_itemWidth + scroll
// //         },
// //         modifiers: {
// //             x: (x, target) => {
// //                 const s = gsap.utils.wrap(-my_itemWidth, my_wrapWidth - my_itemWidth, parseInt(x))
// //                 return `${s}px`
// //             }
// //         }
// //     })
// // } 
// // my_dispose(0)


// // /*-------------------- Wheel --------------------*/
// // const my_handleMouseWheel = (e) => {
// //   my_scrollY -= e.deltaY * 0.9
// // }


// // /*-------------------- Touch --------------------*/
// // let my_touchStart = 0
// // let my_touchX = 0
// // let my_isDragging = false
// // const my_handleTouchStart = (e) => {
// //     my_touchStart = e.clientX || e.touches[0].clientX
// //     my_isDragging = true
// //     $my_menu.classList.add('is-dragging')
// // }
// // const my_handleTouchMove = (e) => {
// //     if (!my_isDragging) return
// //     my_touchX = e.clientX || e.touches[0].clientX
// //     my_scrollY += (my_touchX - touchStart) * 2.5
// //     my_touchStart = my_touchX
// // }
// // const my_handleTouchEnd = () => {
// //     my_isDragging = false
// //     $my_menu.classList.remove('is-dragging')
// // }


// // /*-------------------- Listeners --------------------*/
// // $my_menu.addEventListener('mousewheel', my_handleMouseWheel)

// // $my_menu.addEventListener('touchstart', my_handleTouchStart)
// // $my_menu.addEventListener('touchmove', my_handleTouchMove)
// // $my_menu.addEventListener('touchend', my_handleTouchEnd)

// // $my_menu.addEventListener('mousedown', my_handleTouchStart)
// // $my_menu.addEventListener('mousemove', my_handleTouchMove)
// // $my_menu.addEventListener('mouseleave', my_handleTouchEnd)
// // $my_menu.addEventListener('mouseup', my_handleTouchEnd)

// // $my_menu.addEventListener('selectstart', () => { return false })


// // /*-------------------- Resize --------------------*/
// // window.addEventListener('resize', () => {
// //     my_menuWidth = $my_menu.clientWidth
// //     my_itemWidth = $my_items[0].clientWidth
// //     my_wrapWidth = $my_items.length * my_itemWidth
// // })


// // /*-------------------- Render --------------------*/
// // const my_render = () => {
// //     requestAnimationFrame(my_render)
// //     my_y = my_lerp(y, my_scrollY, .1)
// //     my_dispose(my_y)
    
// //     my_scrollSpeed = my_y - my_oldScrollY
// //     my_oldScrollY = my_y
    
// //     gsap.to($my_items, {
// //         skewX: -my_scrollSpeed * .01,
// //         rotate: my_scrollSpeed * .01,
// //         scale: 1 - Math.min(100, Math.abs(my_scrollSpeed)) * 0.003
// //     })
// // }
// // my_render()


// var slidePosition = 1;
// SlideShow(slidePosition);

// // forward/Back controls
// function plusSlides(n) {
//   SlideShow(slidePosition += n);
// }

// //  images controls
// function currentSlide(n) {
//   SlideShow(slidePosition = n);
// }

// function SlideShow(n) {
//   var i;
//   var slides = document.getElementsByClassName("Containers");
//   var circles = document.getElementsByClassName("dots");
//   if (n > slides.length) {slidePosition = 1}
//   if (n < 1) {slidePosition = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < circles.length; i++) {
//       circles[i].className = circles[i].className.replace(" enable", "");
//   }
//   slides[slidePosition-1].style.display = "block";
//   circles[slidePosition-1].className += " enable";
// } 
