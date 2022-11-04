<footer class="page-footer">
    <a href="javascript:void(0)" onclick="scrollToTop()" class="scroll-top">
        <div class="scroll-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </a>
    <div class="container py-4">
        <div class="news-letter">
            <p class="text-center">
                Subscribe to our newsletter to receive the latest special offers and news on
            </p>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Sign Up" class="btn btn-secondary">
                </div>
            </form>
        </div>
        <div class="social-links">
            <a href=""><div class="social-icons"><i class="fa-brands fa-facebook"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-instagram"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-linkedin"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-twitter"></i></div></a>
        </div>
        <div class="copyright-section">
            <small class="text-center">copyright &copy; all rights reserved | pwered by <a href="">Fourtech</a></small>
        </div>
    </div>
</footer>


<script>
    const scrollToTop = () =>{
        scrollTo(0,0);
    }
    const displayElements = (target_element) => {
        var taregt = document.getElementById(target_element);
        if(taregt.style.display == "block"){
            taregt.removeAttribute("style");
        }else{
            taregt.setAttribute("style","display:block;");
        }
    }
    var start = 0;
    function coreValuesSlider(){
        var container = document.querySelectorAll(".corevalue-card");
        if(start < container.length - 1){
            start++;
        }else{
            start = 0;
        }
        container.forEach(element => {
            if(container[start] == element){
                element.setAttribute("class","corevalue-card active");
            }else{
                element.setAttribute("class","corevalue-card");
            }
        })

        setTimeout("coreValuesSlider()", 5000);
    }
    window.onload = coreValuesSlider()
</script>