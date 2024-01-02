function handleOutboundLinkClicks(event){
	ga('send', 'event', {
		eventCategory: 'Outbound Link',
		eventAction: 'click',
		eventLabel: event.target.href,
		teansport: 'beacon'
	});
}