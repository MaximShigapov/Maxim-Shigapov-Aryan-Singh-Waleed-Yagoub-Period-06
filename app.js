let tl =gsap.timeline({
    scrollTrigger:{
        trigger: ".front-page",
        start: "0%",
        end: "100%",
        markers: false,
        scrub: true,
        pin: true,
    },
});

tl.fromTo(".front-page", {clipPath: "circle(10%)"},
{clipPath: "circle(75%)", duration: 3}
);
tl.fromTo(".logo",{scale:3}, {scale:0, opacity: 0, duration: 1},"-=2");

tl.fromTo(".title",{opacity:0}, {opacity:1, duration: 1});
tl.fromTo(".sub-title",{opacity:0}, {opacity:1, duration: 1});
