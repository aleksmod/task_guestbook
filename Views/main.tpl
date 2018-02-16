{extends file="layout.tpl"}
{block name=title}Login{/block}
{block name=body}

<form action="main" method="POST">
    <div class="form-check">
        <p><b>Sorting</b></p>
        <div class="form-check">
            <label class="checkbox-inline"><input type="checkbox" name="order1" value="author">by author</label>
            <label class="checkbox-inline"><input type="checkbox" name="order2" value="email">by email</label>
            <label class="checkbox-inline"><input type="checkbox" name="order3" value="date">by date</label>
        <br>
            <label class="radio-inline"><input type="radio" name="sort" value="DESC" checked>DESC</label>
            <label class="radio-inline"><input type="radio" name="sort" value="ASC">ASC</label>
        </div>
        <button type="submit" class="btn btn-success">Sort</button>    
    </div>        
  </form> 

<table class="table" >
    <thead class="thead-light">
        <th><p>ID</p></th>
        <th><p>author</p></th>
        <th><p>email</p></th>
        <th><p>homepage</p></th>
        <th><p>text</p></th>
        <th><p>ip</p></th>
        <th><p>browser</p></th>
        <th><p>date</p></th>
    </thead>
    <tbody>
    {if !empty($notes)}
    {foreach $notes as $note}
        <div class="panel-body">
        <tr>
        <td>{$note['id']}</td>
        <td>{$note['author']}</td>
        <td>{$note['email']}</td>
        <td>{$note['homepage']}</td>
        <td>{$note['text']}</td>
        <td>{$note['ip']}</td>                 
        <td>{$note['browser']}</td>
        <td>{$note['date']}</td>
        </tr>
        </div> 
    {/foreach}
    {else}
        <b>There are no notes</b>
    {/if}     
    </tbody>
</table>                            

{/block}                      