<content class="wrap">

    <section>


        {foreach from=$about_list item=x}
           <center>
            <img id="banksy" src="{$x.image}">
               <p>
            <p id="content"> {$x.about}</p>
           </center>

        {/foreach}

    </section>
</content>