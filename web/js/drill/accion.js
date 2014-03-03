$(document).ready(function($){
	$('#drilldown-1').dcDrilldown();
	$('#drilldown-2').dcDrilldown({
			speed       	: 'fast',
			saveState		: true,
			showCount		: true,
			linkType		: 'link',
			backText		: 'All',
			defaultText		: 'Select Option'
	});
	$('#drilldown-3').dcDrilldown({
			speed       	: 'slow',
			saveState		: true,
			showCount		: false,
			linkType		: 'breadcrumb'
	});
	$('#drilldown-4').dcDrilldown({
			speed       	: 'fast',
			saveState		: false,
			showCount		: false,
			linkType		: 'backlink'
	});
});