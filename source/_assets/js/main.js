window.addEventListener(
  "load",
  function() {
    // document.getElementById("css-loading").style.display = "none";
    var menu = document.getElementById("menu-bt");
    var x = document.getElementById("sidebar-bot");
    // x.style.left = "-10rem";
    menu.addEventListener("click", (e) => {
      e.stopPropagation();

      //use get computed style to get the initial value
      console.log(window.getComputedStyle(x).left, x.style.left);
      if (x.style.left === "-10rem") {
        x.style.left = "0rem";
      } else {
        x.style.left = "-10rem";
      }
    });

    window.addEventListener("click", function(e) {
      let y = document.getElementById("sidebar-bot");
      if (y.style.left === "0rem") {
        console.log("hiding menu");
        y.style.left = "-10rem";
      }
    });

    //for intersections observer works but very buggy selector keeps jumping
    const sections = document.querySelectorAll(".section");
    const menuli = document.querySelectorAll(".menu-item > a");
    let current = " ";
    // console.log(sections);
    // const option = {
    //   root: null,
    //   threshold: 0,
    //   rootMargin: "0px",
    // };

    // const observer = new IntersectionObserver(function(entries, observer) {
    //   entries.forEach((elm) => {
    //     current = elm.target.getAttribute("id");
    //     console.log(current);
    //     menuli.forEach((elm) => {
    //       console.log(elm.getAttribute("data-content"));
    //       elm.style.backgroundColor = "initial";
    //       let itm = elm.getAttribute("data-content");
    //       //   console.log(itm, current);
    //       if (itm == current) {
    //         elm.style.backgroundColor = "rgb(66, 153, 225)";
    //       }
    //     });
    //   });
    // }, option);

    // sections.forEach((section) => {
    //   observer.observe(section);
    // });

    //with scroll works perfectly
    window.addEventListener("scroll", () => {
      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        //const sectionHeight = section.clientHeight;
        //console.log(pageYOffset);
        if (pageYOffset >= sectionTop) {
          current = section.getAttribute("id");
        }
      });
      menuli.forEach((a) => {
        a.style.backgroundColor = "initial";
        let itm = a.getAttribute("data-content");
        // console.log(itm, current);
        if (itm == current) {
          a.style.backgroundColor = "rgb(66, 153, 225)";
        }
      });
    });

    //smooth scroll
    menuli.forEach((a) => {
      a.addEventListener("click", (evt) => {
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          evt.preventDefault();
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $("html, body").animate(
            {
              scrollTop: $(hash).offset().top,
            },
            800,
            function() {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            }
          );
        } // End if
      });
    });
    $("a").on("click", function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          800,
          function() {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          }
        );
      } // End if
    });
  },
  false
);
