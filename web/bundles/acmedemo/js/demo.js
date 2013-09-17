function Category(category_name, category_description, category_file)
{
	var category_name = category_name;
	var category_description = category_description;
	var category_file = category_file;
	
	this.getName = function()
	{
		return category_name;
	};
	
	this.getDescription = function()
	{
		return category_description;
	};
	
	this.getFile = function()
	{
		return category_file;
	};
}

function Image(image_name, image_description, image_file, username, date_created)
{
	var image_name = image_name;
	var image_description = image_description;
	var image_file = image_file;
	var username = username;
	var date_created = date_created;
	
	this.getName = function()
	{
		return category_name;
	};
	
	this.getDescription = function()
	{
		return category_description;
	};
	
	this.getFile = function()
	{
		return category_file;
	};
}

function showInfo(event, name, description)
{
	var category = new Category(name, description, 'file');
	
    var div = document.getElementById('divInfo');
	
	var divHtml = '<table border="1">'
				+'<tr>'
				+'<td>'+category.getName()+'</td>'
				+'</tr>'
				+'<tr>'
				+'<td>'+category.getDescription()+'</td>'
				+'</tr>'
				+'</table>';
	div.innerHTML = divHtml;
}

function hideInfo()
{
	var div = document.getElementById('divInfo');
	div.innerHTML = '';
}


function showMessageJson(idimage, path)
{
		var postData = {"idimage": idimage};
		//alert(JSON.stringify(postData));
		jQuery.ajax({
			url: path,
			type: 'POST',
			data: JSON.stringify(postData),
			contentType:  "application/json",
		
			success: function (response, textStatus, jqXHR) 
			{
				$("#divInfo").text(response.message);
			},
			error: function (xhr, ajaxOptions, thrownError) 
			{ 
				$("#divInfo").text('err = '+thrownError);
			}
	});
}
