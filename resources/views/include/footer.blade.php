<footer>
                    <div class="page-footer text-center">
                        <div class="fixed-bottom shadow-sm">
                            <a href="https://covid19.who.int" target="_blank">
                                <img src="../SiteAssets/images/favicon.png"/>
                                <span>view My Website</span>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
        <script>
       var x =  document.getElementById("CancelAlert");
       function CancelFunction(){
        var y  = document.getElementById("CanceldText").style.display="none";
       }
    </script>

        <script src="{{ asset('SiteAssets/js/vendors/jquery.min.js') }}"></script>
        <script src="{{ asset('SiteAssets/js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('SiteAssets/js/global.js') }}"></script>
        <script src="{{ asset('SiteAssets/js/vendors/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('SiteAssets/js/dashboard.js') }}"></script>
    </body>
</html>