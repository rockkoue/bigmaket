<!--debut footer-->

<div class="pos-footer">
    <section class="barriere">
        <div class="autoplayin">
            <span class="txt t1">La priorité de notre service client, c’est votre sécurité et la protection de vos données
                personnelles - Achète partour et tout en un clic avec Market Online (mo.com) &nbsp;</span>
            <span class="txt t2">&nbsp;</span>
        </div>
</div>
</section>

<section id="footer">
    <div></div>
    <footer>
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-2">
                        <h5>Pages.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acceuil</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Devenir Vendeur</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Qui sommes nous?</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Conditions d'utilisation.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politique de Confidentialité</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Publicité sur mo</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aide</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Applications Mobiles.</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form>
                            <h5>Newsletter.</h5>
                            <p>Restez les premiers informés.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="E-mail... ">
                                <button class="btn btn-outline-primary" type="button">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2021 Market Online | mo.com, tous droits réservés.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="fab fa-twitter" href="#">
                                <use xlink:href="#twitter" />
                            </a></li>
                        <li class="ms-3"><a class="fab fa-instagram" href="#">
                                <use xlink:href="#instagram" />
                            </a></li>
                        <li class="ms-3"><a class="fab fa-facebook" href="#"></a>
                            <use xlink:href="#facebook" /></a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </footer>
</section>
</div>
<!--fin footer-->

<!-- Debut Chatbot-->

<section class="autochat">

    <div class="chat_icon">
        <i class="far fa-comment-dots"></i>
    </div>
    <div class="chat_box">



    </div>


</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script>
    $(document).ready(function() {
        $('.chat_icon').click(function(event) {
            $('.chat_box').toggleClass('active');

        });

    });
</script>


<!-- fin Chatbot-->

<!--boutton retour-->
<button id="back-to-top-btn"><i class="fas fa-angle-up"></i></button>

</body>

<script>
    const backToTopButton = document.querySelector("#back-to-top-btn");

    window.addEventListener("scroll", scrollFunction);

    function scrollFunction() {
        if (window.pageYOffset > 300) { // Show backToTopButton
            if (!backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnExit");
                backToTopButton.classList.add("btnEntrance");
                backToTopButton.style.display = "block";
            }
        } else { // Hide backToTopButton
            if (backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnEntrance");
                backToTopButton.classList.add("btnExit");
                setTimeout(function() {
                    backToTopButton.style.display = "none";
                }, 500);
            }
        }
    }

    backToTopButton.addEventListener("click", smoothScrollBackToTop);

    // function backToTop() {
    //   window.scrollTo(0, 0);
    // }

    function smoothScrollBackToTop() {
        const targetPosition = 0;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 750;
        let start = null;

        window.requestAnimationFrame(step);

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
        }
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    };
</script>


<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {

            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            } else {
                accordionItemBody.style.maxHeight = 0;
            }

        });
    });
</script>


<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.capou');
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>


<script>
    $(document).ready(function() {
        $(".like").click(function() {
            $(this).toggleClass("heart")

        });

    });
</script>

<script>
    // getting all required elements
    const searchWrapper = document.querySelector(".search-input");
    const inputBox = searchWrapper.querySelector("input");
    const suggBox = searchWrapper.querySelector(".autocom-box");
    const icon = searchWrapper.querySelector(".icon");
    let linkTag = searchWrapper.querySelector("a");
    let webLink;

    // if user press any key and release

    inputBox.onkeyup = (e) => {
        let userData = e.target.value; //user enetered data
        let emptyArray = [];
        if (userData) {
            icon.onclick = () => {
                webLink = `https://www.google.com/search?q=${userData}`;
                linkTag.setAttribute("href", webLink);
                linkTag.click();
            }
            emptyArray = suggestions.filter((data) => {
                //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
            emptyArray = emptyArray.map((data) => {
                // passing return data inside li tag
                return data = `<li>${data}</li>`;
            });
            searchWrapper.classList.add("active"); //show autocomplete box
            showSuggestions(emptyArray);
            let allList = suggBox.querySelectorAll("li");
            for (let i = 0; i < allList.length; i++) {
                //adding onclick attribute in all li tag
                allList[i].setAttribute("onclick", "select(this)");
            }
        } else {
            searchWrapper.classList.remove("active"); //hide autocomplete box
        }
    }

    function select(element) {
        let selectData = element.textContent;
        inputBox.value = selectData;
        icon.onclick = () => {
            webLink = `https://www.google.com/search?q=${selectData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        searchWrapper.classList.remove("active");
    }

    function showSuggestions(list) {
        let listData;
        if (!list.length) {
            userValue = inputBox.value;
            listData = `<li>${userValue}</li>`;
        } else {
            listData = list.join('');
        }
        suggBox.innerHTML = listData;
    }
</script>


<script>
    const viewBtn = document.querySelector(".view-modal"),
        popup = document.querySelector(".popup"),
        close = popup.querySelector(".close"),
        field = popup.querySelector(".field"),
        input = field.querySelector("input"),
        copy = field.querySelector("button");

    viewBtn.onclick = () => {
        popup.classList.toggle("show");
    }
    close.onclick = () => {
        viewBtn.click();
    }

    copy.onclick = () => {
        input.select();
        if (document.execCommand("copy")) {
            field.classList.add("active");
            copy.innerText = "Copied";

        }
    };
</script>

<!--tendance-->
<script>
    let slider = document.getElementById('slider')

    let btnleft = document.getElementById('btn-left')
    let btnright = document.getElementById('btn-right')

    btnleft.addEventListener('click', function() {
        slider.scrollLeft -= 220;
    })

    btnright.addEventListener('click', function() {
        slider.scrollLeft += 220;
    })


    const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

    //AUTO PLAY THE SLIDER 
    function autoPlay() {
        if (slider.scrollLeft > (maxScrollLeft - 1)) {
            slider.scrollLeft -= maxScrollLeft;
        } else {
            slider.scrollLeft += 1;
        }
    }
    let play = setInterval(autoPlay, 50);

    // PAUSE THE SLIDE ON HOVER
    let thumbnails = document.getElementsByClassName('thumbail');

    for (i = 0; i < thumbnails.length; i++) {

        thumbnails[i].addEventListener('mouseover', function() {
            clearInterval(play);
        });

        thumbnails[i].addEventListener('mouseout', function() {
            return play = setInterval(autoPlay, 50);
        });
    }
</script>




<!--script-->
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="js/script.js"></script>
<script src="js/fonctionnalites.js"></script>


</html>