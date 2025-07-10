{include file='header.tpl'}
{include file='navbar.tpl'}

<div class="ui container">
	<div class="ui padded segment">
		<h2 style="display:inline;">{$NEW_RESOURCE}</h2>

		<div class="res right floated">
			<a href="{$CANCEL_LINK}" class="ui red button" onclick="return confirm('{$CONFIRM_CANCEL}');">{$CANCEL}</a>
		</div>

		<div class="ui divider"></div>

		{if isset($ERROR)}
			<div class="ui negative message">
				{$ERROR}
			</div>
		{/if}

		<form action="" method="post" class="ui form">
			<div class="field">
				<label for="inputCategory">{$SELECT_CATEGORY} <small>{$REQUIRED}</small></label>
				<select class="ui selection dropdown" name="category" id="inputCategory">
					{foreach from=$CATEGORIES item=category}
						<option value="{$category.id}">{$category.name}</option>
					{/foreach}
				</select>
			</div>

			<div class="field">
				<label for="inputName">{$RESOURCE_NAME} <small>{$REQUIRED}</small></label>
				<input type="text" name="name" id="inputName">
			</div>

			<div class="field">
				<label for="inputShort_description">{$RESOURCE_SHORT_DESCRIPTION} <small>{$REQUIRED}</small></label>
				<input type="text" name="short_description" id="inputShort_description">
			</div>

			<div class="field">
				<label for="inputDescription">{$RESOURCE_DESCRIPTION} <small>{$REQUIRED}</small></label>
            	<textarea style="width:100%" name="content" id="reply" rows="15">{$CONTENT}</textarea>
			</div>

			<div class="field">
				<label for="inputContributors">{$CONTRIBUTORS}</label>
				<input type="text" name="contributors" id="inputContributors">
			</div>

			<div class="field">
				<label for="inputReleaseType">{$RELEASE_TYPE}</label>
				<select class="ui selection dropdown" id="inputReleaseType" name="type">
					<option value="zip">{$ZIP_FILE}</option>
					<option value="github">{$GITHUB_RELEASE}</option>
					<option value="external">{$EXTERNAL_DOWNLOAD}</option>
				</select>
			</div>

			<div class="field">
				<input type="hidden" name="token" value="{$TOKEN}">
				<input type="submit" class="ui blue button" value="{$SUBMIT}">
			</div>

		</form>
	</div>
</div>

{include file='footer.tpl'}