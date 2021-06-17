const USPLeft = gsap.utils.toArray('.quote h2');
USPLeft.forEach(box => {

    gsap.set(box, {
        opacity: 0,
    })

    gsap.to(box, { 
        opacity: 1,
        // scale: 1,
        // ease: "bounce.out",
        duration: .4,
        scrollTrigger: {
            start: "center bottom",
        trigger: box,
        ease: "bounce.out",
        onEnter: ({progress, direction, isActive}) => box.classList.add('animate__animated', 'animate__slideInUp'),
        // markers: true
        //   scrub: true
        }
    })

});