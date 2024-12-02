// console.log(gsap);

// gsap.to('#box', {
//     x: 1000,
//     duration: 5,
//     delay: 1,
//     backgroundColor: 'limegreen',
//     rotate: 360,
//     borderRadius: '50%',
//     scale: 0.5,
// })

// gsap.from('#box', {
//     x: 1000,
//     duration: 2.5,
//     delay: 1,
//     backgroundColor: 'limegreen',
//     rotate: 360,
//     borderRadius: '50%',
//     repeat:-1,
//     yoyo:true
// })

// gsap.from('h1', {
//     y: 1000,
//     duration: 1,
//     delay: 1,
//     opacity:0,
//     stagger:1
// })


// multipal box

const tl = gsap.timeline()
tl.to('#box1',{
    x:1000,
    duration: 2.5,
    delay: 1
})
tl.to('#box2',{
    x:1000,
    rotate: 360,
    duration: 2.5,
})
tl.to('#box3',{
    x:1000,
    rotate: -360,
    duration: 2.5,
})