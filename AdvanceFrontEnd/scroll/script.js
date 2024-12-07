gsap.from('#page1 .box1', {
    scale: 0,
    rotate: 360,
    duration: 1,
    delay: 1,

})
gsap.from('#page2 .box1', {
    scale: 0,
    rotate: 360,
    duration: 1,
    delay: 1,
    scrollTrigger: {
        trigger: '#page2 .box1',
        scrollr: 'body',
        // markers: true,
        srart: "top 50%",
        end: "top 30%",
        scrub: 2
    }

})
gsap.from('#page3 .box1', {
    x: 600,
    rotate: 360,
    duration: 1,
    delay: 1,
    scrollTrigger: {
        trigger: '#page3 .box1',
        scrollr: 'body',
        // markers: true,
        srart: "top 50%",
        end: "top 30%",
        scrub: 2
    }

})

