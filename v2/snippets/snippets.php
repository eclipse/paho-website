<?php include '../_includes/header.php' ?>
<div class="panel panel-default">
<div class="panel-body">
<div class="snippet-index">
    <div class="page-header">
        <h1>Eclipse Paho Snippets</h1>
        <h2>On this page you can search for code snippets that show you how to accomplish basic tasks using the Eclipse Paho clients</h2>
        <p>Simply start typing keywords for what you would like to do and then click on the most relevent result. If you think that we are missing something that would be useful for yourself and other users, please let us know on paho-dev@eclipse.org</p>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
           <div class="form-group">
           <input class="form-control input-lg " id="snippet-search" type="text" placeholder="Search for examples here..">
           </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row list-group snippet-list"></div>
</div>
<div class="snippet">
    <div class="page-header">
        <h1 class="title snippet-title"><span class="snippet-title-text">Paho Example Snippets </span><span class="snippet-lang"></span></h1>
    </div>
    <p class="snippet-desc"></p>
    <pre class="snippet-code prettyprint"></pre>
</div>
</div>
</div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js" type="text/javascript"></script>
<script src="/paho/v2/js/snippets.js" type="text/javascript" defer="defer"></script>
<?php include '../_includes/footer.php' ?>
