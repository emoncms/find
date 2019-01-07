<?php 
    global $path; 
    $version = 1;
?>

<section id="intro" class="hero-unit text-center">
    <h2 id="ip" class="jumbotron-heading">Getting your ip</h2>
    <p id="loader" class="lead">Searching...</p>
</section>
  
<section id="list-section" class="text-center">
    <div class="container">
        <h4>Select your device from the list:</h4>

        <template id="list-group-item">
            <li><a href="#" style="color: #666!important"><img><span></span></a></li>
        </template>

        <ul id="list" class="nav nav-tabs nav-stacked text-left" style="display: inline-block"><ul>
    </div>
</section>
<script>
    PATH = "<?php echo $path ?>";
</script>
<script  src="js/index.js"></script>
<script src="<?php echo $path; ?>Modules/find/js/find.js?v=<?php echo $version; ?>"></script>

<style>
    #intro{
        left:0;
        border-radius: 0;
        width: 100vw;
        position: absolute;
        height: 6rem;
        padding: 3rem 0;
    }
    #list-section{
        margin-top: 13rem;
    }
    #list li a{
        padding: 1em 2em;
    }
    #list li a img{
        height: 1.3em;
        padding-right: .3em;
    }
</style>