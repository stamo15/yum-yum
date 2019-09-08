<footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href="{{ route('front.recipes') }}" role="button">
            Explore recipes
            <i class="fas fa-download ml-2"></i>
        </a>
            <a class="btn btn-outline-white" href="{{ route('front.register') }}" role="button">
            Create an account
            <i class="fas fa-graduation-cap ml-2"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="#">
        <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-twitter mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-youtube mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-google-plus-g mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-dribbble mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-pinterest mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-github mr-3"></i>
        </a>

        <a href="#">
        <i class="fab fa-codepen mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © {{ Date('Y') }} Copyright:
        <a href="https://github.com/stamo15" target="_blank"> Salmane Tamo </a>
    </div>
    <!--/.Copyright-->

</footer>
