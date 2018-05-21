<div id="main_content">
{if isset($view)}
	{include file="$view"}
{/if}

<!-- Chat BOX-->
{literal}
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'ea9ea2d6-bbc6-41a8-b95d-3c9dcb61a333', f: true }); done = true; } }; })();</script>
{/literal}


<!--// End CHAT BOX-->
</div>