<content class="wrap">

    <section>


        {foreach from=$about_list item=x}
           <center>
            <img src="{$x.image}">
               <p>
            {$x.about}
          </p>
           </center>

        {/foreach}

    </section>
</content>