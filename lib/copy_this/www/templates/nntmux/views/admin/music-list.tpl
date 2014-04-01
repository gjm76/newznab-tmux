<h1>{$page->title}</h1> 

{if $musiclist}
{$pager}

<table style="margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Artist</th>
		<th class="mid">Created</th>
	</tr>
	
	{foreach from=$musiclist item=music}
	<tr class="{cycle values=",alt"}">
		<td class="less">{$music.ID}</td>
		<td><a title="Edit" href="{$smarty.const.WWW_TOP}/music-edit.php?id={$music.ID}">{$music.title} ({$music.year})</a></td>
		<td>{$music.artist}</td>
		<td width="80" class="mid">{$music.createddate|date_format}</td>
	</tr>
	{/foreach}

</table>

<br/>
{$pager}
{else}
<p>No Music available.</p>
{/if}
