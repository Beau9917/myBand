<content class="wrap">


    {foreach from=$result_list item=home}
        <center>
            <img id="" src="{$home.image}">
            <article>
                <h1>{$home.title}</h1>

                <p id ="content"> {$home.content}</p>
            </article>
        </center>
    {/foreach}


</content>
