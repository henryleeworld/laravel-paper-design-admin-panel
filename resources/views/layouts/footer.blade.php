<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(' by ') }}<span class="@if(Auth::guest()) text-white @endif">{{ __('Henry Lee') }}</span>
                </span>
            </div>
        </div>
    </div>
</footer>