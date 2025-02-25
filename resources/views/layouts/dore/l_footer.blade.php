@yield('page_custom_html')
<script src="{!!asset('js/vendor/jquery-3.3.1.min.js')!!}"></script>
<script src="{!!asset('js/vendor/bootstrap.bundle.min.js')!!}"></script>
<script src="{!!asset('js/vendor/perfect-scrollbar.min.js')!!}"></script>
<script src="{!!asset('js/vendor/mousetrap.min.js')!!}"></script>
<script data-pace-options='{"startOnPageLoad": false }' src="{!!asset('js/vendor/pace.min.js')!!}"></script>
@yield('page_asset_js')
<script src="{!!asset('js/dore.script.js')!!}"></script>
<script src="{!!asset('js/scripts.js')!!}"></script>
<script type="text/javascript">
    let url_admin="{{route('dashboard.index')}}";
    let url_current_page="{{Helper::getCurrentPageURL()}}";
    let token = "{{ csrf_token() }}";
    let baseUserImageURL = "{{asset('storage/images/users')}}/";
</script>
<script src="{!!asset('app.js')!!}"></script>
@yield('page_custom_js')
</body>
</html>