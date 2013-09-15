
function showDetails(event, description)
{
    var div = document.getElementById('details');
	div.innerHTML = description;
}

function hideDetails()
{
	var div = document.getElementById('details');
	div.innerHTML = '';
}