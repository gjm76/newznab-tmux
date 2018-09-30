<div class="well well-sm">
	<h1>{$title}</h1>

	{if $releaselist}
		{$releaselist->links()}
		<table style="margin-top:10px;" class="data table table-striped responsive-utilities jambo-table Sortable">

			<tr>
				<th>name</th>
				<th>category</th>
				<th>size</th>
				<th>files</th>
				<th>postdate</th>
				<th>adddate</th>
				<th>grabs</th>
				<th>options</th>
			</tr>

			{foreach from=$releaselist item=release}
				<tr class="{cycle values=",alt"}">
					<td title="{$release.name}"><a
								href="{$smarty.const.WWW_TOP}/admin/release-edit?id={$release.guid}">{$release.searchname|escape:"htmlall"|wordwrap:75:"\n":true}</a>
					</td>
					<td class="less">{$release.category_name}</td>
					<td class="less right">{$release.size|filesize}</td>
					<td class="less mid"><a href="release-files?id={$release.guid}">{$release.totalpart}</a></td>
					<td class="less">{$release.postdate|date_format}</td>
					<td class="less">{$release.adddate|date_format}</td>
					<td class="less mid">{$release.grabs}</td>
					<td>
						{if $release.guid}<a href="{$smarty.const.WWW_TOP}/details/{$release.guid}">view</a> |{/if}
						<a href="{$smarty.const.WWW_TOP}/admin/release-delete/{$release.guid}">delete</a></td>
				</tr>
			{/foreach}

		</table>
		<br/>
		{$releaselist->links()}
	{else}
		<p>No releases available.</p>
	{/if}
</div>