<content class="wrap">

<section>




        {foreach from=$result item=article}
            <center>
                    <img id="banksy" src="{$article.image}">
                    <h1>{$article.title}</h1>
                    <p id ="content"> {$article.content}</p>


        {/foreach}

    <p id="pagenumber">Page {$page}</p>

    <table id="pagechanger">
        <tr><td id="left">
        {if $page gt 1}
        <a href="?url=articles&page={$page-1}">Previous</a>
        {/if}
            </td>
            <td id="right">
        {if $page lt $number_of_pages}
        <a href="?url=articles&page={$page+1}">Next</a>
        {/if}
            </td></tr>
    </table>
            </center>
</section>
</content>

