<section class="tabs-comics">
    <input class="radio" id="one" name="group" type="radio" checked>
    <input class="radio" id="two" name="group" type="radio">
    <input class="radio" id="three" name="group" type="radio">
        <div class="tabs">
            <label class="tab" id="one-tab" for="one">Minecraft</label>
            <label class="tab" id="two-tab" for="two">GTA</label>
            <label class="tab" id="three-tab" for="three">Valorant</label>
        </div>
    <div class="panels">
        <div class="panel" id="one-panel">
            <div class="content">
                <?php get_template_part('template-parts/components/content/home/tabs-guides/tab-minecraft'); ?>
            </div>
        </div>
        <div class="panel" id="two-panel">
            <div class="content content--variant">
                <?php get_template_part('template-parts/components/content/home/tabs-guides/tab-gta'); ?>
            </div>
        </div>
        <div class="panel" id="three-panel">
            <div class="content">
                <?php get_template_part('template-parts/components/content/home/tabs-guides/tab-valorant'); ?>
            </div>
        </div>
    </div>
</section>
