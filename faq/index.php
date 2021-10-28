
<head>
<title>faq</title>
<link rel="stylesheet" href="<?php SITE_ROOT ?>/assets/css/custom.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
<body>
<script>
        if (location.href.indexOf("?") != -1) {
            toastr.error(location.href.substring(location.href.indexOf("?") + 1, location.href.length).split("_").join(" ").split("=")[0]);
        }
    </script>
<div class="modal-overlay">
</div>
<div class="invites modal" style="max-height: 350px; overflow-y:scroll;">
<table style="width:100%; text-align: left;">
</table>
</div>
<div class="main">
<div class="panel-card">
<div class="header">
<span>frequently asked questions</span>
</div>
<div class="question">
<span>my game is stuck on loading when I queue</span>
<span class="answer">
<span>--------------------------------------------------------------
     make sure to not have nexium injected when loading into a game where you are not the party leader</span>
</span>
</div>
</div>
</div>
<div class="controls">
<a href="/logout">log out</a>
</div>
<div class="user-controls">
<a href="https://panel.nexium.cc/index.php">panel</a>
</div>
<script>
        $(".question").each(function () {
            $(this).click(function () {
                $(this).toggleClass("open");
            });
        });
    </script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'625e161a49e50599',m:'3eede009a51570bd38380013b3f9e8a936c5859f-1614053314-1800-AfcpUj+aBYezpFMLo1/3hUYy8/OFY30aacCLF4ALcdWJdqyTOlcyHsGILd79UcFGAQrfRdFYs4ftA54ijmtgxE3ZJ9fHFrkZKM64SMcKBkHMw12+Sx5uqKJHEVhVtL9TOA==',s:[0xca606c8c0e,0x617b283a9f],}})();</script></body>