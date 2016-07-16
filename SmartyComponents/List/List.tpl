<ul id="{$collection->id}" class="$collection->class">
	{foreach from=$collection item=item key=key}
		{include file="./ListItem.tpl"}
	{/foreach}
</ul>
		