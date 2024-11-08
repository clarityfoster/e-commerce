<a href="" class="topBtn" id="topBtn">
    <i class="bi bi-arrow-up"></i>
</a>
<script>
    const topBtn = document.getElementById('topBtn');
    window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                topBtn.classList.add('topActive');
            } else {
                topBtn.classList.remove('topActive');
            }
    });
    topBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({top: 0, behavior: 'smooth'});
    })
</script>