<?php 
    global $path; 
    $version = 2;
?>

<section id="intro" class="hero-unit text-center mt-5">
    <p><?php echo _("Find OpenEnergyMonitor devices on your local network"); ?></p>
    <h2 id="ip" class="jumbotron-heading"><?php echo _("Getting your ip"); ?></h2>
    <p id="loader" class="lead"><?php echo _("Searching..."); ?></p>
</section>
  
<section id="list-section" class="text-center">
    <div class="container">

        <div id="not-found" class="d-none" style="margin-bottom:3rem">
            <h4><?php echo _("No devices found on your local network!"); ?></h4>
            <p><?php echo _("Ensure the device is online, then click reload:"); ?></p>
            <a href="ok" class="btn btn-large btn-success"><?php echo _("Reload"); ?></a>
        </div>


        <div id="found" class="d-none">
            <h4><?php echo _("Found devices:"); ?></h4>
        </div>
        <ul id="list" class="nav nav-tabs nav-stacked text-left" style="display: inline-block"><ul>
        <template id="list-group-item">
            <li><a href="#" style="color: #666!important"><img><span></span></a></li>
        </template>

    </div>
</section>
<script>
    PATH = "<?php echo $path ?>";
</script>
<script src="<?php echo $path; ?>Modules/find/js/find.js?v=<?php echo $version; ?>"></script>

<style>
    #list li a{
        padding: 1em 2em;
    }
    #list li a img{
        height: 1.3em;
        padding-right: .3em;
    }
    .d-none{
        display: none!important;
    }
</style>
