<content class="wrap">

<section>


        {foreach from=$result_list item=article}
            <center>
        <article>
        <h1>{$article.title}</h1>
        <content>{$article.content}</content>
        </article>
            </center>
        {/foreach}

</section>
</content>

