function locomotive_js_code() {
    const scroll = new LocomotiveScroll({
      el: document.querySelector(".main"),
      smooth: true,
    });
  }
  locomotive_js_code();
  function header_part() {
     
    gsap.from(".parent_em_1", {
      y: -1000,
  
      opacity: 0,
      duration:2,
      delay:0.5,
      ease: "back",
    });
    gsap.from(".parent_em", {
      x: -1000,
      top: 20,
      opacity: 0,
      duration:2.8,
      ease: "back",
    });
  }
    gsap.from(".nav_bar_1",{
      x:100,
      delay:2,
      duration:1,
      ease:"back(3)",
      opacity:0
    })
  header_part();
  function cursor_animation() {
      var videoicon = document.querySelector(".heading");
      var buttonicon = document.querySelector(".courser");
      videoicon.addEventListener("mouseenter", function () {
        gsap.to(buttonicon, {
          scale: 1,
          opacity: 1,
        });
      });
      videoicon.addEventListener("mouseleave", function () {
        gsap.to(buttonicon, {
          scale: 0,
          opacity: 0,
        });
      });
      videoicon.addEventListener("mousemove", function (dets) {
        gsap.to(buttonicon, {
          left: dets.x-50,
          top: dets.y-70,
        });
      });
    }
    

    cursor_animation()