<?php
/* フッターに CSS や Javascript 等を追加したい場合は、?> 以降に書いてください。
 (To add CSS or Javascript in the footer, please write them after the below ?>. ) */
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var links = document.querySelectorAll("a[href^='http']:not([href*='" + window.location.hostname + "'])");
    links.forEach(function (link) {
        link.setAttribute('target', '_new');
    });
});
</script>