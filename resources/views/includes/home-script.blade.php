<script src="{{ asset('lightbox/dist/js/lightbox-plus-jquery.js') }}"></script>

<script>


    document.querySelectorAll('.nav-link').forEach(link => {

        if(link.href === window.location.href){
            link.setAttribute('aria-current', 'page')
        }
    });
</script>
